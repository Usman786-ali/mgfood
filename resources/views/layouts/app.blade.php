<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MG Food and Event Planners - Best Event Planner in Karachi')</title>
    <meta name="description"
        content="@yield('meta_description', 'Karachi\'s top event planner for weddings, corporate events, and catering services. Let us make your special moments one of a kind.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/footer-fix.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/footer-social.css') }}?v={{ time() }}">
    @yield('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <a href="{{ route('home') }}" style="text-decoration: none;">
                        <h1>MG <span class="highlight">Events</span></h1>
                    </a>
                </div>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                    </li>
                    <li><a href="{{ route('portfolio') }}"
                            class="nav-link {{ Route::is('portfolio') ? 'active' : '' }}">Portfolio</a></li>
                    <li><a href="{{ route('services') }}"
                            class="nav-link {{ Route::is('services') ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('about') }}"
                            class="nav-link {{ Route::is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link {{ Route::is('blog') ? 'active' : '' }}">Blog</a>
                    </li>
                    <li><a href="{{ route('contact') }}"
                            class="nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
                <div class="nav-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
                    <button class="mobile-toggle" id="mobileToggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Professional Footer -->
    <footer class="main-footer">
        <!-- CTA Section -->
        <div class="footer-cta">
            <div class="container">
                <div class="cta-content">
                    <div class="cta-text">
                        <span class="cta-subtitle">BOOK AN APPOINTMENT TODAY</span>
                        <h2>Make Your Event Unforgettable with <br><b>MG Food & Event Planner</b></h2>
                    </div>
                    <a href="{{ route('contact') }}" class="btn-cta">Book Your Event Now <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="footer-content">
            <div class="container">
                <div class="footer-grid">
                    <!-- Brand Column -->
                    <div class="footer-col brand-col">
                        <div class="footer-logo">
                            <h2>MG <span class="highlight">Food & Event Planner</span></h2>
                            <p class="brand-subtitle">FOOD & EVENT PLANNERS</p>
                        </div>
                        <p class="brand-desc">MG Food & Event Planner is a trusted and professional event management
                            company in Karachi, specializing in wedding planning, corporate events, catering services,
                            and luxury celebrations. With over 15 years of experience, we deliver creative concepts,
                            flawless execution, and unforgettable experiences tailored to every client's vision.</p>
                        <div class="footer-social">
                            <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                    </path>
                                </svg></a>
                            <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                            <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z">
                                    </path>
                                    <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                                </svg></a>
                            <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                    </path>
                                </svg></a>
                        </div>
                    </div>

                    <!-- Quick Links Column -->
                    <div class="footer-col">
                        <h3>Quick Links</h3>
                        <ul class="footer-links">
                            <li><a href="{{ route('home') }}">Best Event Planner</a></li>
                            <li><a href="{{ route('services') }}">Corporate Events</a></li>
                            <li><a href="{{ route('services') }}">Wedding Planning</a></li>
                            <li><a href="{{ route('services') }}">Catering Services</a></li>
                            <li><a href="#">Giveaways</a></li>
                            <li><a href="#">Blog Posts</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('portfolio') }}">Gallery</a></li>
                        </ul>
                    </div>

                    <!-- Contact Us Column -->
                    <div class="footer-col contact-col">
                        <h3>Contact Us</h3>
                        <ul class="contact-list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span><strong>Our Office:</strong> Office No. 1, Mezzanine Floor, Building No. 19-C, Phase 2 Extension, DHA, Karachi</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span><strong>Our Kitchen:</strong> Plot L-5, Street No. 1, Altaf Town, Korangi Creek, Karachi, Pakistan</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span>info@mgfoodevent.com</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <span>+92 300 8849180</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <span>+92 021-35807088</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Bar -->
        <div class="footer-copyright">
            <div class="container">
                <p>Copyright &copy; 2025 - Powered By MG Food & Event Planners</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}?v={{ time() }}"></script>
    @yield('scripts')
</body>

</html>