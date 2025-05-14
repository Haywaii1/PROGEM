<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\BlogPost;


class PageController extends Controller
{
    public function home()
    {
        $featuredPost = BlogPost::where('is_featured', true)->latest()->first(); // fetch latest featured post
        return view('pages.home', compact('featuredPost'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function case()
    {
        return view('pages.case-studies');
    }


}

