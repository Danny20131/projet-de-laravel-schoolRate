<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\RatingCriteria;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::with(['ratings', 'ratings.criteria'])->get();
        $criterias = RatingCriteria::all();
        return view('ratings.index', [
            'universities' => $universities,
            'criterias' => $criterias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ratings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',
            'ratings' => 'required|array',
            'ratings.*' => 'numeric|min:1|max:5',
        ]);

        
        $userId = auth()->id(); // Récupérer l'ID de l'utilisateur connecté
        if (!$userId) {
            return back()->with('error', 'Vous devez être connecté pour effectuer cette action.');
        }

        foreach ($request->ratings as $criteriaId => $score) {
            if ($score !== null) {  // Assurez-vous que le score n'est pas null
                Rating::updateOrCreate(
                    [
                        'user_id' => $userId,
                        'university_id' => $request->university_id,
                        'criteria_id' => $criteriaId,
                    ],
                    [
                        'score' => $score,
                    ]
                );
            }
        }

        return back()->with('success', 'Votre notation a été enregistrée avec succès.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $university = University::with(['ratings', 'ratings.criteria'])->findOrFail($id);
        return view('ratings.show', ['university' => $university]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rating = Rating::with(['criteria', 'university'])->findOrFail($id);
        return view('ratings.edit', compact('rating'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'score' => 'required|numeric|min:1|max:5',
        ]);

        $rating = Rating::findOrFail($id);
        $rating->update(['score' => $request->score]);

        return redirect()->route('ratings.index')->with('success', 'Note mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rating = Rating::findOrFail($id);
        $rating->delete();

        return back()->with('success', 'Note supprimée avec succès.');
    }

}
