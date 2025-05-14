@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4 my-5">
        <section class="about-progem">
            <div class="about-progem-content">
                <h1 class="about-title" data-aos="fade-right"><span>Blog</span></h1>
            </div>
        </section>

        <section class="latest-posts py-5">

            <!-- Header -->
            <div class="container header-container mb-5">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">
                            <span class="light">Latest</span>
                            <span class="dark">Blog Posts</span>
                        </h2>
                    </div>
            </div>

            <!-- Featured Post -->
            @if ($featuredPost)
                <div class="container my-5 d-flex justify-content-center">
                    <div class="col-md-6 text-center mb-4 featured-post ">
                        <a href="{{ route('blog.show', $featuredPost->id) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm" style="height: 500px;">
                                <img src="{{ asset('storage/' . $featuredPost->image) }}"
                                    class="card-img-top rounded object-fit-cover"
                                    style="height: 300px; object-fit: cover; margin-bottom: 0;"
                                    alt="{{ $featuredPost->title }}">
                                <div class="card-body py-2 px-3" style="padding-bottom: 0.5rem !important;">
                                    <h3 class="card-title mb-1 text-start">{{ $featuredPost->title }}</h3>
                                    <p class="card-text text-start mb-1">{{ Str::limit($featuredPost->excerpt, 120) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endif

            <!-- Grid of Other Posts -->
            <div class="container grid-container">
                <div class="row g-4">
                    @foreach ($posts as $post)
                        <div class="col-sm-6 col-lg-4">
                            <a href="{{ route('blog.show', $post->id) }}" class="text-decoration-none text-dark">
                                <div class="card post-card border-0 shadow-sm">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                        class="img-fluid rounded shadow mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($post->body), 100) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
    </div>
@endsection
