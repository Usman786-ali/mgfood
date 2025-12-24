<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MG Food and Event Planners - Best Event Planner in Karachi</title>
    <meta name="description"
        content="Karachi's top event planner for weddings, corporate events, and catering services. Let us make your special moments one of a kind.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio-hover.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/footer-fix.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/footer-social.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-responsive.css') }}?v={{ time() }}">
    <style>
        /* Force left alignment - Override any cached styles */
        .hero-content {
            text-align: left !important;
            margin: 0 !important;
        }

        .hero-buttons {
            justify-content: flex-start !important;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <h1>
                        <span class="logo-desktop">MG <span class="highlight">Food & Event Planners</span></span>
                        <span class="logo-mobile">MG <span class="highlight">Food & event Planner</span></span>
                    </h1>
                </div>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li><a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a></li>
                    <li><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
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

    <!-- Hero Section -->
    <section class="hero" id="home">
        <!-- Video Background -->
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source src="{{ asset('Video/Untitled design (6).mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="hero-grid">
                <div class="hero-content">
                    <span class="hero-badge"
                        data-aos="fade-up">{{ $siteSettings['hero_badge'] ?? '✨ Best Event Planner In Karachi' }}</span>
                    <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                        @php
                            $title = $siteSettings['hero_title'] ?? 'Turning Special Moments Into Lasting Memories';
                            $highlight = $siteSettings['hero_highlight'] ?? 'Lasting Memories';
                        @endphp
                        {!! str_replace($highlight, '<span class="highlight">' . $highlight . '</span>', $title) !!}
                    </h1>
                    <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                        {{ $siteSettings['hero_description'] ?? "Experience elegance, taste, and perfection with MG Food & Event Planners, crafting moments you'll cherish forever." }}
                    </p>
                    <div class="hero-buttons" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ $siteSettings['hero_btn1_link'] ?? route('contact') }}"
                            class="btn btn-secondary btn-lg btn-animated-border">
                            {{ $siteSettings['hero_btn1_text'] ?? 'Start Planning Now' }}
                        </a>
                    </div>
                </div>

                <!-- Right Column Wrapper -->
                <div class="hero-right-column">
                    <!-- Right Contact Form -->
                    <div class="hero-quick-form" data-aos="fade-left" data-aos-delay="400">
                        <form id="heroQuickForm">
                            <div class="quick-form-group">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Full Name" required>
                            </div>
                            <div class="quick-form-group">
                                <label>Phone</label>
                                <input type="tel" placeholder="Enter Your Phone" required>
                            </div>
                            <div class="quick-form-group">
                                <label>Select Event Type</label>
                                <select required>
                                    <option value="other">Other</option>
                                    <option value="wedding">Wedding</option>
                                    <option value="corporate">Corporate Events</option>
                                    <option value="birthday">Birthday Party</option>
                                    <option value="engagement">Engagement</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-send-message">Send Message</button>
                        </form>
                    </div>

                    <!-- Hero Social Icons -->
                    <div class="hero-social-icons" data-aos="fade-up" data-aos-delay="500">
                        @if(isset($siteSettings['social_facebook']))
                            <a href="{{ $siteSettings['social_facebook'] }}" target="_blank" class="hero-social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                        @endif
                        @if(isset($siteSettings['social_instagram']))
                            <a href="{{ $siteSettings['social_instagram'] }}" target="_blank" class="hero-social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        @endif
                        @if(isset($siteSettings['social_youtube']))
                            <a href="{{ $siteSettings['social_youtube'] }}" target="_blank" class="hero-social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                        @endif
                        @if(isset($siteSettings['social_tiktok']))
                            <a href="{{ $siteSettings['social_tiktok'] }}" target="_blank" class="hero-social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">What We Offer — Crafted for You</h2>
                <p class="section-description">
                    Corporate events, weddings, catering, and more — all perfectly planned under one roof.
                </p>
            </div>

            <div class="portfolio-grid"
                style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; max-width: 1400px; margin: 0 auto;">
                @forelse($portfolioItems as $index => $item)
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="{{ ($index + 1) * 100 }}"
                        style="height: 450px;">
                        <div class="portfolio-image" style="height: 100%;">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                style="height: 100%; object-fit: cover;">
                            <div class="portfolio-overlay">
                                <h3>{{ $item->title }}</h3>
                                <p>{!! $item->description !!}</p>
                                <a href="{{ route('portfolio') }}" class="btn-view-more">View More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Fallback if no portfolio items -->
                    <div class="portfolio-item" data-aos="zoom-in">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=800&h=600&fit=crop"
                                alt="Wedding Events">
                            <div class="portfolio-overlay">
                                <h3>Wedding Events</h3>
                                <p>Add portfolio items from admin panel to display here.</p>
                                <a href="{{ route('portfolio') }}" class="btn-view-more">View More</a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">What We Do</span>
                <h2 class="section-title">Creative Event Solutions</h2>
                <p class="section-description">
                    From concept to execution, we bring your vision to life with innovative ideas and flawless
                    execution. Every event is unique, and so is our approach.
                </p>
            </div>

            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3>Corporate Events</h3>
                    <p>We are the best corporate event planners in Karachi, organizing all kinds of seminars, product
                        launches, ceremonies & more. We've worked with various multinational clients making their events
                        successful.</p>
                    <a href="{{ route('contact') }}" class="service-link">Read More →</a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                        </svg>
                    </div>
                    <h3>Wedding Planning</h3>
                    <p>As a leading wedding event planner in Karachi, we take care of your big day from start to finish.
                        We take care of wedding photography, catering, decoration and everything possible to make your
                        wedding memorable for your family and friends.</p>
                    <a href="{{ route('contact') }}" class="service-link">Read More →</a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                    </div>
                    <h3>Catering Services</h3>
                    <p>MG event planners offer the best catering services in Karachi. It's not just about the food but
                        the taste that lasts for years. Explore our catering menu and choose the best cuisine for your
                        special day.</p>
                    <a href="{{ route('contact') }}" class="service-link">Read More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Separator Line -->
    <div style="height: 1px; background: linear-gradient(to right, transparent, #ddd, transparent); margin: 0;"></div>

    <!-- Meet Our Board Members Section -->
    <section style="padding: 100px 0; background: #fff;">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 60px;">
                <h2 style="font-size: 36px; font-weight: 700; color: #1a1a2e;">
                    <span style="color: #D4A853;">Meet</span> Our Board Members
                </h2>
                <a href="{{ route('about') }}"
                    style="background: #D4A853; color: #000; padding: 12px 30px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">
                    Explore More
                    <span>→</span>
                </a>
            </div>

            <div
                style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; max-width: 800px; margin: 0 auto;">
                <!-- CEO Card -->
                <div
                    style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); text-align: center;">
                    <div style="width: 100%; height: 300px; overflow: hidden;">
                        <img src="{{ asset('images/CEO.jpg') }}" alt="CEO"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 25px;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #1a1a2e; margin-bottom: 5px;">CEO</h4>
                        <p style="color: #666; font-size: 14px; margin: 0 0 15px 0;">Tanveer Ahmed</p>
                        <a href="https://wa.me/923001234567" target="_blank"
                            style="display: inline-flex; align-items: center; gap: 8px; background: #D4A853; color: #000; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-size: 14px; font-weight: 600;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#000">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Director Card -->
                <div
                    style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); text-align: center;">
                    <div style="width: 100%; height: 300px; overflow: hidden;">
                        <img src="{{ asset('images/Director.jpg') }}" alt="Director"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 25px;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #1a1a2e; margin-bottom: 5px;">Director</h4>
                        <p style="color: #666; font-size: 14px; margin: 0 0 15px 0;">Sheraz Mustafa</p>
                        <a href="https://wa.me/923217654321" target="_blank"
                            style="display: inline-flex; align-items: center; gap: 8px; background: #D4A853; color: #000; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-size: 14px; font-weight: 600;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Separator Line -->
    <div style="height: 1px; background: linear-gradient(to right, transparent, #ddd, transparent); margin: 0;"></div>

    <!-- Wedding Feature Section -->
    <section class="wedding-feature">
        <div class="container">
            <div class="feature-grid">
                <div class="feature-left" data-aos="fade-right">
                    <div class="laptop-frame">
                        <div class="laptop-screen">
                            <video width="100%" height="100%" autoplay muted loop playsinline
                                style="border-radius: 8px; object-fit: cover;">
                                <source src="{{ asset('Video/marena club.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="laptop-base"></div>
                    </div>
                </div>
                <div class="feature-right" data-aos="fade-left">
                    <h2 class="feature-title">We Are The Best <span class="highlight-blue">Wedding</span> Planning
                        Organizers and Coordinators In Pakistan</h2>
                    <p class="feature-description">
                        MG Food & Event Planners is a <b>leading wedding and event planning company in Karachi</b>, with
                        <b>over 15 years of experience</b> in creating elegant and unforgettable wedding events. From
                        beautiful Nikkah ceremonies to grand wedding celebrations, our <b>professional team</b> plans
                        and executes every detail with precision and care.
                    </p>
                    <p class="feature-description">
                        Having successfully delivered <b>hundreds of wedding events</b>, we understand our clients'
                        vision and transform it into a flawless reality. As a trusted and <b>award-winning event planner
                            in Karachi</b>, we are known for <b>premium décor, seamless coordination, and exceptional
                            service quality</b>.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Book Your Event</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">Our Clients</span>
                <h2 class="section-title">Trusted By Many Clients</h2>
            </div>

            <div class="clients-slider-wrapper" data-aos="fade-up" data-aos-delay="100">
                <div class="clients-track">
                    @forelse($clients as $client)
                        <div class="client-card">
                            <img src="{{ asset($client->logo) }}" alt="{{ $client->name }}">
                        </div>
                    @empty
                        <!-- Fallback placeholders if no clients in database -->
                        <div class="client-card">
                            <img src="https://placehold.co/200x100/png?text=Client+1" alt="Client 1">
                        </div>
                        <div class="client-card">
                            <img src="https://placehold.co/200x100/png?text=Client+2" alt="Client 2">
                        </div>
                        <div class="client-card">
                            <img src="https://placehold.co/200x100/png?text=Client+3" alt="Client 3">
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content" data-aos="fade-right">
                    <span class="section-subtitle">{{ $siteSettings['home_about_badge'] ?? 'Who We Are' }}</span>
                    <h2 class="section-title">
                        {{ $siteSettings['home_about_title'] ?? "Pakistan's Premier Event Architects" }}
                    </h2>
                    @if(isset($siteSettings['home_about_description']) && !empty($siteSettings['home_about_description']))
                        <div class="about-text-container">
                            @foreach(explode("\n", $siteSettings['home_about_description']) as $para)
                                @if(trim($para))
                                    <p class="about-text">{{ trim($para) }}</p>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <p class="about-text">
                            MG Food & Event Planner is a trusted and <b>award-winning event management company in
                                Pakistan</b>, delivering exceptional events for <b>over 15 years</b>. We specialize in
                            wedding planning, corporate events, and luxury celebrations, creating flawless experiences that
                            leave a lasting impression.
                        </p>
                        <p class="about-text">
                            Our expertise spans across weddings, corporate functions, brand launches, conferences, and
                            private events. Every event is carefully planned to align with our clients' vision, brand
                            identity, and objectives — ensuring creativity, precision, and perfection at every step.
                        </p>
                        <p class="about-text">
                            From elegant Nikkah ceremonies to grand wedding receptions, our <b>wedding planning services</b>
                            focus on personalized themes, <b>premium décor, seamless coordination, and flawless
                                execution</b>. We believe every celebration should be unique, memorable, and stress-free.
                        </p>
                        <p class="about-text">
                            From venue selection and logistics management to décor, catering, and complete event execution,
                            we handle everything with professionalism and care. Whether it's a corporate gathering or a
                            wedding celebration, MG Food & Event Planner delivers events that exceed expectations.
                        </p>
                    @endif
                    <div class="about-features">
                        <div class="about-feature">
                            <div class="feature-icon">✓</div>
                            <div class="feature-content">
                                <h4>Creative Excellence</h4>
                                <p>Innovative concepts and customized event designs</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon">✓</div>
                            <div class="feature-content">
                                <h4>Expert Team</h4>
                                <p>Highly skilled and experienced event professionals</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon">✓</div>
                            <div class="feature-content">
                                <h4>On-Time Delivery</h4>
                                <p>Punctual execution with zero compromise on quality</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon">✓</div>
                            <div class="feature-content">
                                <h4>24/7 Support</h4>
                                <p>Always available to assist you at every stage</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ $siteSettings['home_about_btn_link'] ?? route('contact') }}" class="btn btn-primary"
                        style="margin-top: 30px;">
                        {{ $siteSettings['home_about_btn_text'] ?? 'Discover Our Journey' }}
                    </a>
                </div>

                <div class="about-image" data-aos="fade-left">
                    <img src="{{ asset('images/team-photo.jpg.JPG') }}" alt="MG Food & Event Planners Team">
                    <div class="experience-badge">
                        <h3>15+</h3>
                        <p>Years of Excellence</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Info Section (Added per User Image Request) -->
        <section class="premium-info-section">
            <div class="container">
                <div class="premium-info-grid">
                    <!-- Left: Overlapping Images -->
                    <div class="premium-info-images" data-aos="fade-right">
                        <img src="{{ asset('images/venue-hall.JPG') }}" alt="Exquisite Hall" class="image-back">
                        <img src="{{ asset('images/event-setup.JPG') }}" alt="Premium Event Setup" class="image-front">
                    </div>

                    <!-- Right: Content -->
                    <div class="premium-info-content" data-aos="fade-left">
                        <div class="premium-info-subtitle">AWARD WINNING</div>
                        <h2 class="premium-info-title">Best Event Planner Award Winner from DHA Creek Club</h2>
                        <p class="premium-info-desc">
                            MG Food & Event Planner is proudly honored with the <b>Best Event Planner Award</b> by DHA
                            Creek Club, recognizing our excellence, creativity, and commitment to delivering premium
                            events in Karachi.
                        </p>
                        <p class="premium-info-desc">
                            Trusted by leading brands and prestigious venues, we specialize in weddings, corporate
                            events, brand activations, and luxury celebrations, delivering flawless execution from
                            concept to completion.
                        </p>
                        <p class="premium-info-desc">
                            From elegant décor to seamless coordination, our team ensures every event reflects quality,
                            professionalism, and unforgettable experiences.
                        </p>

                        <div class="premium-info-bottom">
                            <div class="experience-card">
                                <div class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3>Award</h3>
                                <p>Best Event Planner</p>
                                <small style="color: #666; font-size: 12px;">Awarded by DHA Creek Club</small>
                            </div>
                            <ul class="feature-list">
                                <li><span class="check-icon">✓</span> Award-Winning Event Planning Services</li>
                                <li><span class="check-icon">✓</span> Premium Quality & Creative Concepts</li>
                                <li><span class="check-icon">✓</span> 100% Client Satisfaction</li>
                                <li><span class="check-icon">✓</span> Professional & Experienced Team</li>
                                <li><span class="check-icon">✓</span> Trusted by Top Brands & Venues</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievements Section (Dark Theme) -->
        <section class="achievements-section">
            <div class="container">
                <div class="achievements-grid">
                    <div class="achievements-left" data-aos="fade-right">
                        <h2>Our Achievements</h2>
                        <p>Passion, creativity, and flawless execution define us — transforming ordinary gatherings into
                            extraordinary experiences as Pakistan’s trusted event planners.</p>
                        <a href="{{ route('contact') }}" class="btn-white">Schedule a Call</a>
                    </div>
                    <div class="stats-grid" data-aos="fade-left">
                        <div class="stat-box">
                            <span class="stat-icon">🛡️</span>
                            <h3>{{ $siteSettings['stat1_number'] ?? '500+' }}</h3>
                            <hr>
                            <p>{{ $siteSettings['stat1_label'] ?? 'Events Completed' }}</p>
                        </div>
                        <div class="stat-box">
                            <span class="stat-icon">📋</span>
                            <h3>{{ $siteSettings['stat2_number'] ?? '15+' }}</h3>
                            <hr>
                            <p>{{ $siteSettings['stat2_label'] ?? 'Years Experience' }}</p>
                        </div>
                        <div class="stat-box">
                            <span class="stat-icon">🌟</span>
                            <h3>{{ $siteSettings['stat3_number'] ?? '50+' }}</h3>
                            <hr>
                            <p>{{ $siteSettings['stat3_label'] ?? 'Expert Team' }}</p>
                        </div>
                        <div class="stat-box">
                            <span class="stat-icon">📅</span>
                            <h3>{{ $siteSettings['stat4_number'] ?? '100%' }}</h3>
                            <hr>
                            <p>{{ $siteSettings['stat4_label'] ?? 'Client Satisfaction' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-subtitle">Get In Touch</span>
                    <h2 class="section-title">Make Your Event Unforgettable</h2>
                    <p class="section-description">
                        Let's discuss your event and bring your vision to life. Fill out the form below or contact us
                        directly.
                    </p>
                </div>

                <div class="contact-grid">
                    <div class="contact-form-wrapper" data-aos="fade-right">
                        <form class="contact-form" id="contactForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="event-type">Event Type *</label>
                                    <select id="event-type" name="event_type" required>
                                        <option value="">Select Event Type</option>
                                        <option value="wedding">Wedding</option>
                                        <option value="corporate">Corporate Event</option>
                                        <option value="birthday">Birthday Party</option>
                                        <option value="engagement">Engagement</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="guests">Expected Guests</label>
                                <input type="number" id="guests" name="guests" placeholder="Approximate number">
                            </div>
                            <div class="form-group">
                                <label for="message">Tell Us About Your Event *</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Get a Quote</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Professional Footer -->
        <footer class="main-footer">
            <!-- CTA Section -->
            <div class="footer-cta">
                <div class="container">
                    <div class="cta-content">
                        <div class="cta-text">
                            <span class="cta-subtitle">BOOK AN APPOINTMENT TODAY</span>
                            <h2>{!! $siteSettings['cta_title'] ?? 'Make Your Event Unforgettable with <br><b>MG Food & Event Planner</b>' !!}
                            </h2>
                            @if(isset($siteSettings['cta_description']))
                                <p style="color: rgba(255,255,255,0.8); margin-top: 10px;">
                                    {{ $siteSettings['cta_description'] }}
                                </p>
                            @endif
                        </div>
                        <a href="{{ $siteSettings['cta_btn_link'] ?? route('contact') }}"
                            class="btn-cta">{{ $siteSettings['cta_btn_text'] ?? 'Book Your Event Now' }} <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
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
                                company in Karachi, specializing in wedding planning, corporate events, catering
                                services, and luxury celebrations. With over 15 years of experience, we deliver creative
                                concepts, flawless execution, and unforgettable experiences tailored to every client's
                                vision.</p>
                            <div class="footer-social">
                                @if(isset($siteSettings['social_facebook']))
                                    <a href="{{ $siteSettings['social_facebook'] }}" target="_blank" class="social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </a>
                                @endif
                                @if(isset($siteSettings['social_instagram']))
                                    <a href="{{ $siteSettings['social_instagram'] }}" target="_blank" class="social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                        </svg>
                                    </a>
                                @endif
                                @if(isset($siteSettings['social_youtube']))
                                    <a href="{{ $siteSettings['social_youtube'] }}" target="_blank" class="social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    </a>
                                @endif
                                @if(isset($siteSettings['social_tiktok']))
                                    <a href="{{ $siteSettings['social_tiktok'] }}" target="_blank" class="social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Quick Links Column -->
                        <div class="footer-col">
                            <h3>Quick Links</h3>
                            <ul class="footer-links">
                                <li><a href="{{ route('home') }}">Best Event Planner in Karachi</a></li>
                                <li><a href="{{ route('services') }}">Wedding Event Planners</a></li>
                                <li><a href="{{ route('services') }}">Corporate Event Management</a></li>
                                <li><a href="{{ route('services') }}">Catering Services</a></li>
                                <li><a href="#">Brand Activations & Giveaways</a></li>
                                <li><a href="{{ route('portfolio') }}">Gallery</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
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
                                    <span><strong>Our Office:</strong> Office No. 1, Mezzanine Floor, Building No. 19-C,
                                        Phase 2 Extension, DHA, Karachi</span>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span><strong>Our Kitchen:</strong> Plot L-5, Street No. 1, Altaf Town, Korangi
                                        Creek, Karachi, Pakistan</span>
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

            <!-- SEO Footer Line -->
            <div
                style="background: #1a1a2e; padding: 15px 0; text-align: center; border-top: 1px solid rgba(255,255,255,0.1);">
                <div class="container">
                    <p style="color: #999; font-size: 13px; margin: 0;">
                        MG Food & Event Planner – Best Wedding & Event Management Company in Karachi, Pakistan
                    </p>
                </div>
            </div>

            <!-- Copyright Bar -->
            <div class="footer-copyright">
                <div class="container">
                    <p>© 2025 MG Food & Event Planner. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/script.js') }}?v={{ time() }}"></script>
</body>

</html>