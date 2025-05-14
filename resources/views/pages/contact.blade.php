@extends('layouts.app')
@section('content')
    <div>

        <div>
            <section class="contact-progem">
                <div class="contact-progem-content">

                    <h1 class="about-title" data-aos="fade-right"><span>Contact</span> Us</h1>
                </div>
            </section>
        </div>

        <div>
            <div class="contact py-5">
                <div class="container">
                    <div class="row">
                        <!-- Contact Info -->
                        <section class="contact-section">
                            <div class="contact-content">
                                <div class="left-column">
                                    <p class="section-label">CONTACT</p>
                                    <h1><span class="red">Get</span> In Touch</h1>
                                    <p class="subtitle">Elit sit risus lorem proin eget molestie nibh onon neque turpis
                                        proin viverra velarcu venenatis nulla blandit.</p>

                                    <div>
                                        <div>
                                            <p><span>📍</span> Lagos, Nigeria & Calgary, Canada</p>
                                            <p><span>✉️</span> progemhubconsulting@gmail.com</p>
                                            <p><span>📞</span> +234 703 023 8199</p>
                                            <img src="img/barcode.jpg" alt="Contact Barcode" style="margin-top: 10px; width: 150px;">

                                        </div>
                                        <div><br>
                                            <h3 style="font-size: 15px; font-weight: 600;">Follow Us</h3>
                                            <div class="social-icons">
                                                <a href="#" class="icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" class="icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="right-column">
                                    <div class="form-box">
                                        <h2>How can we help?</h2>
                                        <p class="form-subtitle">Please fill the form below.</p>

                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <form action="{{ route('contact.send') }}" method="POST">
                                            @csrf
                                            <input type="text" name="name" placeholder="Full Name" required>
                                            <input type="email" name="email" placeholder="Email Address" required>
                                            <textarea name="message" placeholder="Messages" required></textarea>
                                            <button type="submit">SEND MESSAGE</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.9542202371735!2d3.4197552156808844!3d6.426986495355824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf518b94a2225%3A0xf67e3a62d3a94b4e!2sVictoria%20Island%2C%20Lagos%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1620462310984!5m2!1sen!2sng"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>

                        </section>

                    </div>
                </div>

            </div>
        </div>
    @endsection
