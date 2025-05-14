<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;


class BlogController extends Controller
{
    public function index()
    {
        $featuredPost = BlogPost::where('is_featured', true)->latest()->first(); // fetch latest featured post
        $posts = BlogPost::where('is_featured', false)->latest()->take(6)->get(); // latest non-featured posts

        return view('blog.index', compact('featuredPost', 'posts'));
    }


    public function show($id)
    {
        $post = BlogPost::findOrFail($id);

        return view('blog.show', compact('post'));
    }

        public function create()
    {
        return view('blog.create');
    }

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'excerpt' => 'nullable|string|max:500',
        'body' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'is_featured' => 'nullable|boolean',
    ]);

    if (!$request->filled('excerpt')) {
        $validated['excerpt'] = \Illuminate\Support\Str::limit(strip_tags($validated['body']), 200);
    }

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('blog_images', 'public');
    }

    $validated['is_featured'] = $request->has('is_featured');

    BlogPost::create($validated);

    return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
}



}
