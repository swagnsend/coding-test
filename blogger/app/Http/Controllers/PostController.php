<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('post.index', compact('posts'));
        // return response()->json($posts,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
        'post' => 'required|string|max:100',
        'title' => 'required|string|max:255',
        'autor' => 'required|string|max:255',
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'post' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
