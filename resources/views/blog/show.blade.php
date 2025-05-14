<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProGemHub</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS & FontAwesome -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>


    <div class="container my-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded shadow mb-4"
                    style="max-height: 350px; width: 60%; object-fit: cover;">



                <h1 class="mb-3 fw-bold">{{ $post->title }}</h1>
                <p class="text-muted mb-4">Published on {{ $post->created_at->format('M d, Y') }}</p>

                <div class="content" style="line-height: 1.8; font-size: 1.1rem;">
                    {!! nl2br(e($post->body)) !!}
                </div>

                <a href="{{ route('blog.index') }}" class="btn btn-outline-primary mt-5">
                    ← Back to Blog
                </a>
            </div>
        </div>
    </div>

</body>

</html>
