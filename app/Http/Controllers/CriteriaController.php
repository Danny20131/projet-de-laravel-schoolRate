<?php

namespace App\Http\Controllers;

use App\Models\RatingCriteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criteria = RatingCriteria::all();
        return view('criteres.index')->with('criteria', $criteria);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('criteres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        RatingCriteria::create($request->all());

        return redirect()->route('admin.criteres.index')->with('success', 'Critère ajouté avec succès.');
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
    public function edit(RatingCriteria $critere)
    {
        return view('criteres.edit', ['critere' => $critere]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingCriteria $critere)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $critere->update($request->all());

        return redirect()->route('admin.criteres.index')->with('success', 'Critère mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $criteria = RatingCriteria::findOrFail($id);
        $criteria->delete();
        return redirect()->route('admin.criteres.index')->with('success', 'Critère supprimé avec succès.');
    }
}
