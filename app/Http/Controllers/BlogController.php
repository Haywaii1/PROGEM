<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display the blog index.
     */
    public function index()
    {
        $featuredPost = BlogPost::where('is_featured', true)->latest()->first();
        $posts = BlogPost::where('is_featured', false)->latest()->take(6)->get();

        return view('blog.index', compact('featuredPost', 'posts'));
    }

    /**
     * Show a single blog post.
     */
    public function show($id)
    {
        $post = BlogPost::findOrFail($id);

        return view('blog.show', compact('post'));
    }

    /**
     * Show the create blog form.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a new blog post.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'excerpt' => 'nullable|string|max:500',
        'body' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'is_featured' => 'nullable|in:0,1',
    ]);

    if (!$request->filled('excerpt')) {
        $validated['excerpt'] = \Illuminate\Support\Str::limit(strip_tags($validated['body']), 200);
    }

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('blog_images', 'public');
    }

    // ✅ Use the value submitted by the form as-is
    $validated['is_featured'] = $request->input('is_featured', 0);

    BlogPost::create($validated);

    return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
}

}
