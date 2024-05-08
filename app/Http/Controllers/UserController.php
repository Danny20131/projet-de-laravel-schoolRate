<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);


        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        try {
            $user->save();
            return redirect()->route('admin.users.index')->with('succes', 'Utilisateur creer avec succes.');
        } catch (\Exception $e) {
            // Log the error or handle it as necessary
            return redirect()->back()->withErrors(['erreur' => 'creation de l\'utilisateur echouer.']);
        }
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|min:6|confirmed',
        ]);

        if (!empty($validatedData['password'])) {
            $user->password = bcrypt($validatedData['password']);
        }

        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'] ? bcrypt($validatedData['password']) : $user->password,
        ]);

        try {
            $user->save();
            return redirect()->route('admin.users.index')->with('succes', 'Utilisateur modifier avec succes.');
        } catch (\Exception $e) {
            // Log the error or handle it as necessary
            return redirect()->back()->withErrors(['erreur' => 'la modification de l\'utilisateur a echouer.']);
        }
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('admin.users.index')->with('success', 'L\'utilisateur a ete supprimer avec succes.');
        } catch (\Exception $e) {
            return redirect()->route('admin.users.index')->withErrors('suppression de l\'utilisateur echouer.');
        }

    }
}
