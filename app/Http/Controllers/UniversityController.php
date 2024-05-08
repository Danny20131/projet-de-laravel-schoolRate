<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\University;
use Illuminate\Http\Request;
use App\Models\RatingCriteria;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::all();
        return view('universities.index', ['universities' => $universities]);
    }

    public function dataTable()
    {
        $universities = University::all(); // Récupère toutes les universités
        return view('universities.list', ['universities' => $universities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'location' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/profile');
            $imagePath = $file->move($destinationPath, $imageName);

            $manager = new ImageManager(new Driver());
            $manager->read($destinationPath . '/' . $imageName)
                ->scale(200, 200)
                ->save($destinationPath . '/' . $imageName);
            $validatedData['picture'] = 'uploads/profile/' . $imageName;
        }

        University::create($validatedData);

        return redirect()->route('admin.universities.dataTable')->with('success', 'University created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $university = University::with(['ratings', 'ratings.criteria'])->findOrFail($id);
        $comments = Comment::where('university_id', $id)->with('user')->get();
        $criteria = RatingCriteria::all(); // Récupérer tous les critères de notation
        return view('universities.show', [
            'university' => $university,
            'criteria' => $criteria,
            'comments'=> $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        return view('universities.edit', ['university' => $university]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'location' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Traitement de l'image si elle est fournie
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $request->picture->extension();

            $imagePath = public_path('uploads/profile/' . $imageName);
            $manager = new ImageManager(Driver::class);
            $manager->read($image->getRealPath())
                ->resize(200, 200)
                ->save($imagePath);

            $validatedData['picture'] = 'uploads/profile/' . $imageName;

            if (!empty($university->picture)) {
                File::delete(public_path($university->picture));
            }
        } else {
            unset($validatedData['picture']);
        }

        $university->update($validatedData);

        return redirect()->route('admin.universities.dataTable')->with('success', 'University updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        try {
            if (!empty($university->picture)) {
                File::delete(public_path($university->picture));
            }
            $university->delete();
            return redirect()->route('admin.universities.dataTable')->with('success', 'University deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.universities.index')->withErrors('Failed to delete University.');
        }

    }

    public function rankings(Request $request)
    {
        $criteria = RatingCriteria::all();
        $selectedCriterion = $request->input('criteria', null);

        $universities = University::with(['ratings', 'ratings.criteria'])->get()->map(function ($university) use ($criteria, $selectedCriterion) {
            $university->averageRatings = $criteria->mapWithKeys(function ($criterion) use ($university, $selectedCriterion) {
                $average = $university->ratings->where('criteria_id', $criterion->id)->avg('score');
                if (!$selectedCriterion || $selectedCriterion == $criterion->id) {
                    return [$criterion->name => $average];
                }
                return [];
            })->filter();
            return $university;
        });

        if ($selectedCriterion) {
            $universities = $universities->sortByDesc(function ($university) use ($selectedCriterion) {
                return $university->averageRatings->first();
            });
        }

        return view('universities.rankings', [
            'universities' => $universities,
            'criteria' => $criteria,
            'selectedCriterion' => $selectedCriterion
        ]);
    }

}
