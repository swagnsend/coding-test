<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()->orderBy('created_at', 'desc')->get();

        return view('blogs/index', array('blogs' => $blogs));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'content' => 'required|min:10'
        ]);

        Blog::create($validatedData);

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $blog = Blog::find($blog->id);

        return view('blogs/edit', array('blog' => $blog));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {        
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'content' => 'required|min:10'
        ]);

        $blog->merge($validatedData);
        $blog->save();

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
