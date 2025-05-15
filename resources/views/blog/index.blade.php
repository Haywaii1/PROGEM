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
        <div class="container mb-5 text-center">
            <h2 class="fw-bold">
                <span class="text-muted">News</span> <span class="text-dark">Articles</span>
            </h2>
        </div>

        <!-- Featured Post -->
        @if ($featuredPost)
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <a href="{{ route('blog.show', $featuredPost->id) }}" class="text-decoration-none text-dark">
                        <div class="card shadow-lg border-0">
                            <img src="{{ asset('storage/' . $featuredPost->image) }}" class="card-img-top" alt="{{ $featuredPost->title }}" style="height: 350px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="card-title">{{ $featuredPost->title }}</h3>
                                <p class="card-text">{{ Str::limit($featuredPost->excerpt, 150) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

        <!-- Other Posts Grid -->
        <div class="container">
    <div class="row g-4">
        @foreach ($posts as $post)
        <div class="col-sm-6 col-lg-4 d-flex">
            <a href="{{ route('blog.show', $post->id) }}" class="text-decoration-none text-dark flex-fill">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($post->body), 100) }}</p>
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
