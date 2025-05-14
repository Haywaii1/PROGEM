<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        BlogPost::create([
            'title' => 'Featured Blog Title',
            'excerpt' => 'Short description for the featured blog.',
            'body' => 'Full content of the featured blog...',
            'image' => 'img/blog1.jpg',
            'is_featured' => true,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            BlogPost::create([
                'title' => "Blog Post $i",
                'excerpt' => "Excerpt for Blog Post $i...",
                'body' => "Content for Blog Post $i...",
                'image' => "img/bg$i.jpg",
            ]);
        }
    }
}

