<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ratings = Rating::with(['user', 'university', 'criteria'])->get();
        return view('ratings.index', ['ratings' => $ratings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        return view('admin.ratings.edit', ['rating' => $rating]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        $validated = $request->validate([
            'score' => 'required|integer|min:1|max:5',
        ]);

        $rating->update($validated);
        return redirect()->route('admin.ratings.index')->with('success', 'Rating updated successfully.');
    }

    // Suppression d'une note
    public function destroy(Rating $rating)
    {
        $rating->delete();
        return back()->with('success', 'Rating deleted successfully.');
    }
}
