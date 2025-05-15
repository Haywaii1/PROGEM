<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProGemHub</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Animation & FontAwesome -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body>

    {{-- Success flash message --}}
    @if (session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show m-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            setTimeout(() => {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.classList.remove('show');
                    alert.classList.add('fade');
                }
            }, 5000);
        </script>
    @endif

    <!-- Header -->
    <header class="bg-light">
        <!-- Top Bar -->
        <div class="top-bar d-flex justify-content-between px-3 py-2 bg-danger text-white small">
            <div>
                Need help now? Call for a same-day consultation 📞 +234 703 023 8199
            </div>
            <div>
                📧 progemhubconsulting@gmail.com
                <span class="ms-3">
                    <i class="fab fa-facebook-f me-2"></i>
                    <i class="fab fa-twitter me-2"></i>
                    <i class="fab fa-instagram me-2"></i>
                    <i class="fab fa-youtube"></i>
                </span>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="ProGemHub Logo" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('case') }}">Case Studies</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Web Development</a></li>
                                <li><a class="dropdown-item" href="#">PR & Marketing</a></li>
                                <li><a class="dropdown-item" href="#">Brand Strategy</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline-dark">Get in Touch ▶</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="d-flex">
            <div class="container justify-content-center">
                <div class="row gy-4 justify-content-evenly text-center text-md-start" style="margin-left: 100px">

                    <!-- Logo & Intro -->
                    <div class="col-md-3">
                        <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="mb-3"
                            style="max-height: 50px;">
                        <p class="small">An integrated PR agency building powerful brands and nurturing talent.</p>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-md-3">
                        <h6 class="mb-3">Quick Links</h6>
                        <ul class="list-unstyled small">
                            <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
                            {{-- <li><a href="#" class="text-white text-decoration-none">Services</a></li> --}}
                            <li><a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a>
                            </li>
                            <li><a href="{{ route('blog.index') }}" class="text-white text-decoration-none">Blog</a>
                            </li>
                            <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="col-md-3">
                        <h6 class="mb-3">Contact</h6>
                        <p class="mb-1 small"><i class="fas fa-map-marker-alt me-2"></i>Lagos, Nigeria & Calgary, Canada
                        </p>
                        <p class="mb-1 small"><i class="fas fa-envelope me-2"></i>progemhubconsulting@gmail.com</p>
                        <p class="mb-0 small"><i class="fas fa-phone me-2"></i>+234 703 023 8199</p>
                    </div>

                    <!-- Socials -->
                    <div class="col-md-3">
                        <h6 class="mb-3">Follow Us</h6>
                        <div class="d-flex justify-content-center justify-content-md-start gap-3 fs-6">
                            <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                </div>

                <hr class="border-light mt-4">
            </div>
        </div>

        <div class="text-center">
            <p class="mb-0 small">&copy; {{ now()->year }} <strong>PROGEMHUB</strong>. All rights reserved.</p>
        </div>
    </footer>



    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1000
        });
    </script>
</body>

</html>
