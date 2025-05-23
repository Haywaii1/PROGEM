@extends('layouts.app')

@section('content')
    <main>
        <section class="hero">
            <div class="hero-content" data-aos="fade-right">
                <h1 style="color: #ff0000">We help you build a brand story that<br> resonates, sparks conversation
                    and<br>deliver lasting results.
                </h1>

                <p>
                    At our core, we’re storytellers. We partner with you to uncover the unique essence of your brand and
                    translate it into a captivating narrative that resonates with your audience. <span id="moreDetails"
                        class="collapse">
                        By understanding your
                        business goals and the needs of your target market, we craft messaging that sparks relevant
                        conversations and builds a strong community around your brand. This strategic approach ensures that
                        our efforts translate into measurable outcomes, driving lasting value and growth for your
                        organisation.
                    </span>
                </p>

                <a class="learn-more" data-bs-toggle="collapse" href="#moreDetails" role="button" aria-expanded="false"
                    aria-controls="moreDetails" id="learnMoreBtn" onclick="this.style.display='none'">
                    LEARN MORE →
                </a>
            </div>

            <div class="hero-image" data-aos="fade-left" data-aos-delay="300">
                <img src="img/pr-home.png" alt="Brand Strategy Example">
            </div>
        </section>


        <section class="about-section">
            <div class="container about-content">
                <!-- Left Text Block -->
                <div class="text-block" data-aos="fade-right">
                    <p class="about-subtitle">ABOUT PROGEM</p>
                    <h2 class="about-title"><span>Perfect</span> PR solution for your business</h2>
                    <p>
                        An Integrated PR Agency Building Powerful Brands & Nurturing Talent

                    </p>
                    <p>
                        We are a dual-focus PR agency igniting brand transformation for Tech, Care and Consumer brands. We
                        empower businesses to tell compelling stories and equip talented individuals with the tools to
                        succeed in the dynamic world of communications.
                    </p>
                    <a href="{{ route('about') }}" class="read-more-btn">READ MORE <span>→</span></a>
                </div>

                <!-- Services Grid -->
                <div class="services-grid">
                    <div class="service-card" data-aos="fade-right">
                        <div class="icon-box" style="background-color: #ffefc2;">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h4>Strategy</h4>
                        <p>Elit sit risus lorem proin molestie nibh odioa lorem viverra.</p>
                    </div>

                    <div class="service-card" data-aos="fade-left">
                        <div class="icon-box" style="background-color: #ffdbd2;">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <h4>Branding</h4>
                        <p>Elit sit risus lorem proin molestie nibh odioa lorem viverra.</p>
                    </div>

                    <div class="service-card" data-aos="fade-right">
                        <div class="icon-box" style="background-color: #d7e9fb;">
                            <i class="fa-solid fa-chart-bar"></i>
                        </div>
                        <h4>Marketing</h4>
                        <p>Elit sit risus lorem proin molestie nibh odioa lorem viverra.</p>
                    </div>

                    <div class="service-card" data-aos="fade-left">
                        <div class="icon-box" style="background-color: #e4f4d4;">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h4>Relations</h4>
                        <p>Elit sit risus lorem proin molestie nibh odioa lorem viverra.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Partners section --}}
        <section class="clients-section">
            <div>
                <div class="logo-grid"
                    style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap; padding: 10px; text-align: center;">
                    <div class="logo-item" data-aos="fade-right">
                        <img src="img/SRMS.png" alt="srms"
                            style="height: 80px; object-fit: contain; display: block; margin: 0 auto;">
                    </div>
                    <div class="logo-item highlight" data-aos="fade-up">
                        <img src="img/ReelSkills.png" alt="Reelskills"
                            style="height: 80px; object-fit: contain; display: block; margin: 0 auto;">
                    </div>
                    <div class="logo-item" data-aos="fade-down">
                        <img src="img/academy.jpg" alt="Academy"
                            style="height: 80px; object-fit: contain; display: block; margin: 0 auto;">
                    </div>
                    <div class="logo-item" data-aos="fade-down">
                        <img src="img/okes.jpg" alt="Academy"
                            style="height: 80px; object-fit: contain; display: block; margin: 0 auto;">
                    </div>
                </div>


            </div>
        </section>

        {{-- Experience section --}}

        <section class="experience-section">
            <div class="experience-container">
                <!-- Left Section -->
                <div class="left-section">
                    <h2><span class="highlight">Let's</span> Talk</h2>
                    {{-- <p class="description">
                        Elit sit risus lorem proin eget molestie nibh onon neque turpis proin viverra vel arcu venenatis
                        nulla blandit.
                    </p> --}}

                    <div class="features-list">
                        <div class="feature-box">
                            <span class="icon">✅</span>
                            <strong>We CRAFT Brand stories that resonate</strong>
                        </div>

                        <div class="feature-box">
                            <span class="icon">✅</span>
                            <strong>We CREATE Impactful Brand Narratives</strong>
                        </div>

                        <div class="feature-box">
                            <span class="icon">✅</span>
                            <strong>We BUILD Skilled Comms Talent Pool</strong>
                        </div>

                        <div class="feature-box">
                            <span class="icon">✅</span>
                            <strong>We CONNECT Brands with their Audience</strong>
                        </div>

                        <div class="feature-box">
                            <span class="icon">✅</span>
                            <strong>We DRIVE Results with Brand Strategy</strong>
                        </div>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="right-section">
                    <h3>How can we help?</h3>
                    <p class="form-subtitle">Elit sit risus lorem proin eget molestie lorem</p>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Full Name" required>
                        <input type="email" name="email" placeholder="Email Address" required>
                        <textarea name="message" placeholder="Messages" required></textarea>
                        <button type="submit" style="background-color: #ff0000; color: white;">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </section>


        <section class="services-section">
            <div class="container">
                <div class="container my-5" data-aos="fade-right">
                    <div class="text-center">
                        <h2 class="fw-bold">
                            <span style="color: #ff0000;">What</span> We Offer
                        </h2>
                        <p class="text-muted mx-auto" style="max-width: 600px;">
                            Strategic PR, brand management and talent development solutions to build powerful Brands
                            and foster a new generation of communication professionals.
                        </p>
                        <a href="{{ route('about') }}" class="btn mt-3"
                            style="border: 1px solid #ff0000; color: #ff0000;">
                            See More
                        </a>
                    </div>
                </div>



                <div class="grid">
                    <!-- Row 1 -->
                    <div class="card" data-aos="fade-down">
                        <img src="img/public-relation.png" alt="Public Relations">
                        <div class="card-body">
                            <h3>Public Relations</h3>
                            <p>We help you build and maintain a positive public perception of your brand.
                            </p>
                            <div class="arrow">→</div>
                        </div>
                    </div>

                    <div class="card" data-aos="fade-down">
                        <img src="img/media-relation.png" alt="Public Relations">
                        <div class="card-body">
                            <h3>Media Relations</h3>
                            <p>Securing positive media coverage to reach your target audience.
                            </p>
                            <div class="arrow">→</div>
                        </div>
                    </div>

                    <div class="card" data-aos="fade-down">
                        <img src="img/brand-management.png" alt="Public Relations">
                        <div class="card-body">
                            <h3>Brand Management</h3>
                            <p>Tailoring a holistic approach to build, maintain, and evolve your brand identity across all
                                channels.
                            </p>
                            <div class="arrow">→</div>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="card" data-aos="fade-up">
                        <img src="img/crisis-communication.jpg" alt="Public Relations">
                        <div class="card-body">
                            <h3>Crisis Communications</h3>
                            <p>Developing and implementing a plan to navigate negative publicity.
                            </p>
                            <div class="arrow">→</div>
                        </div>
                    </div>

                    <div class="card" data-aos="fade-up">
                        <img src="img/partnership.jpeg" alt="Public Relations">
                        <div class="card-body">
                            <h3>Partnerships/Sponsorships</h3>
                            <p>Creating strategic alliances with other organisations for mutual benefit.

                            </p>
                            <div class="arrow">→</div>
                        </div>
                    </div>

                    <div class="card" data-aos="fade-up">
                        <img src="img/media-training.png" alt="Public Relations">
                        <div class="card-body">
                            <h3>Media Training</h3>
                            <p> Equipping your spokespeople with skills to confidently navigate interviews and turn media
                                moments into positive press.
                            </p>
                            <div class="arrow">→</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Include this below your previous section -->
        <section class="testimonial-section" data-aos="fade-up">
            <div class="testimonial-container">
                <div class="testimonial-text" data-aos="fade-up">
                    <span class="quote-mark">“</span>
                    <h2>Best Public Relations</h2>
                    <p>
                        Elit sit risus lorem proin eget eu molestie nibh odioa neque turpis proin viverra vel arcu
                        venenatis
                        nulla blandit lorem tristique morbi nulla risus lorem proin eget odioa non.
                    </p>
                    <div class="author-info">
                        <strong>Elizabeth Lawson</strong>
                        <div class="role">Business</div>
                    </div>
                </div>

                <div class="dot-box" data-aos="fade-up" data-aos-delay="200"></div>

                <div class="testimonial-image" data-aos="zoom-in">
                    <img src="img/dentist2.jpg" alt="Happy User">
                </div>
            </div>
        </section>
        </section>

        {{-- blog section --}}
        {{-- <section class="blog-section">
            <div class="blog-header">
                <h2><span>News</span> Articles</h2>
                <p>Elit sit risus lorem proin eget molestie nibh onon neque turpis proin.</p>
                <a href="{{ route('blog.index') }}" class="view-all">More Articles</a>
            </div> --}}
        {{-- @if ($featuredPost)
            <section>
                <div class="container my-5 d-flex justify-content-center">
                    <div class="col-md-6 text-center mb-4 featured-post">
                        <a href="{{ route('blog.show', $featuredPost->id) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm" style="height: 600px;">
                                <img src="{{ asset('storage/' . $featuredPost->image) }}"
                                    class="card-img-top rounded object-fit-cover"
                                    style="height: 400px; object-fit: cover; margin-bottom: 0;"
                                    alt="{{ $featuredPost->title }}">
                                <div class="card-body py-2 px-3" style="padding-bottom: 0.5rem !important;">
                                    <h3 class="card-title mb-1 text-start">{{ $featuredPost->title }}</h3>
                                    <p class="card-text text-start mb-1">{{ Str::limit($featuredPost->excerpt, 120) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            @endif --}}


        </section>

        <section class="newsletter my-5" data-aos="fade-up">
            <div class="newsletter-container">
                {{-- Text Section --}}
                <div class="newsletter-text">
                    <small>Stay Updated</small>
                    <h2>Join our <span>Newsletter</span></h2>
                    <p>Get the latest updates, tips, and exclusive offers right in your inbox.</p>

                    @if (session('newsletter_success'))
                        <div class="alert alert-success py-2 px-3 mt-2 d-inline-block">
                            {{ session('newsletter_success') }}
                        </div>
                    @endif
                </div>

                {{-- Form Section --}}
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form">
                    @csrf
                    <input type="email" name="email" placeholder="Your email address" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Contact Us Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel" style="font-size: 15px">Schedule a consultation</h5>
                    <button type="button" class="btn fs-4 fw-bold text-danger ms-auto" data-bs-dismiss="modal"
                        aria-label="Close" style="border: none; background: transparent;">
                        &times;
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger w-100">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
