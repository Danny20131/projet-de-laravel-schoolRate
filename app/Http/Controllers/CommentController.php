<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::with(['user', 'university'])->get();
        return view('comments.index', ['comments' => $comments]);
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
        $request->validate([
            'comment' => 'required|string|max:500',
            'university_id' => 'required|exists:universities,id',
        ]);

        $comment = new Comment();
        $comment->content = $request->comment;
        $comment->university_id = $request->university_id;
        $comment->user_id = auth()->id();
        $comment->save();

        return back()->with('success', 'Votre commentaire a été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $universityId)
    {
        $comments = Comment::where('university_id', $universityId)->with('user')->get();
        return view('universities.show', ['comments'=> $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('admin.comments.edit', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:500',
        ]);

        $comment->update($validated);
        return redirect()->route('admin.comments.index')->with('success', 'Comment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->with('success', 'Comment deleted successfully.');
    }
}
