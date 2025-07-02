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
        $posts=Post::all();
        return response()->json($posts,200);
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
        // dd($request->all());
        try{
            $request->validate([
            'post' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
         ]);
        }
        catch(\Exception $e){
            return response()->json(['error' => 'Failed to create post'], 500);
        }

        $post=Post::create($request->all());
        return response()->json(['message' => 'Post created successfully', 'post' => $post], 201);
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // dd($request->all(), $post);
        $post=Post::find($post->input('id'));

        try{
            $request->validate([
            'post' => 'sometimes|string|max:255',
            'title' => 'sometimes|string|max:255',
            'autor' => 'sometimes|string|max:255',
         ]);
        }
        catch(\Exception $e){
            return response()->json(['error' => 'Failed to update post'], 500);
        }

        $post->update($request->all());
        return response()->json(['message' => 'Post updated successfully', 'post' => $post], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $post->delete();
        return response()->json(['message' => 'Post deleted successfully'], 200);
        //
    }
}
