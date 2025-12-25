@extends('layouts.app')

@section('title', 'About Us - MG Food & Event Planners')

@section('content')
    <!-- Unique Hero for About Page -->
    <section class="hero"
        style="min-height: 70vh; padding-top: 160px; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/Blog-Background.jpeg') }}') center/cover;">
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="hero-content" style="max-width: 850px;">
                <span class="hero-badge" data-aos="fade-up">Our Legacy Since 2010</span>
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                    Crafting <span class="highlight">Unforgettable</span> Memories with Integrity
                </h1>
                <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                    MG Events was founded on a simple principle: every celebration should be a masterpiece. We don't just
                    manage logistics; we curate emotional experiences that bind families and businesses together.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision - Unique Content -->
    <section class="about-unique-content" style="padding: 100px 0; background: #fff;">
        <div class="container">
            <div class="about-grid" style="grid-template-columns: 1fr 1fr; gap: 60px;">
                <div class="about-text-wrapper" data-aos="fade-right">
                    <h2 class="section-title" style="text-align: left;">{{ $aboutSettings->vision_title ?? "Our Vision for Pakistan's Events" }}</h2>
                    <p style="margin-bottom: 25px; color: #555; font-size: 18px; line-height: 1.8;">
                        {{ $aboutSettings->vision_description ?? "At MG Food & Event Planners, we envision a future where Pakistani hospitality meets international standards of precision. Based in the heart of Karachi, we have expanded our footprint to Lahore and Islamabad, bringing a unique blend of heritage and modern aesthetics to every project." }}
                    </p>
                    <p style="margin-bottom: 25px; color: #555; font-size: 18px; line-height: 1.8;">
                        {{ $aboutSettings->vision_description2 ?? "Our founder's philosophy has always been \"The Guest First.\" This drives us to source the finest ingredients for our catering and the most innovative decor for our setups." }}
                    </p>
                    <div class="mission-cards"
                        style="display: grid; grid-template-columns: 1fr; gap: 20px; margin-top: 40px;">
                        <div class="m-card"
                            style="padding: 25px; background: #f8f9fa; border-left: 4px solid var(--primary); border-radius: 10px;">
                            <h4 style="color: var(--dark); margin-bottom: 10px;">Our Decorate</h4>
                            <p style="font-size: 14px; color: #666;">We provide the most innovative and breathtaking decor setups in Pakistan, custom-designed to bring your specific vision to life with architectural precision.</p>
                        </div>
                        <div class="m-card"
                            style="padding: 25px; background: #f8f9fa; border-left: 4px solid var(--primary); border-radius: 10px;">
                            <h4 style="color: var(--dark); margin-bottom: 10px;">Our Food</h4>
                            <p style="font-size: 14px; color: #666;">Experience world-class culinary excellence with our specialized Mughlai, Continental, and Pan-Asian menus, crafted by top-tier chefs using premium ingredients.</p>
                        </div>
                        <div class="m-card"
                            style="padding: 25px; background: #f8f9fa; border-left: 4px solid var(--primary); border-radius: 10px;">
                            <h4 style="color: var(--dark); margin-bottom: 10px;">Our Venue</h4>
                            <p style="font-size: 14px; color: #666;">Gain exclusive access to the most prestigious and luxurious venues across Karachi, Lahore, and Islamabad, ensuring the perfect backdrop for your events.</p>
                        </div>
                    </div>
                </div>
                <div class="about-image-stack" data-aos="fade-left" style="position: relative;">
                    <img src="{{ $aboutSettings && $aboutSettings->vision_image ? asset('storage/' . $aboutSettings->vision_image) : 'https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?w=800' }}" alt="Team Work"
                        style="width: 90%; border-radius: 20px; box-shadow: 20px 20px 0 var(--primary);">
                    <div
                        style="position: absolute; bottom: -30px; right: 0; background: var(--dark); color: white; padding: 25px; border-radius: 15px; width: 220px;">
                        <h2 style="color: var(--primary);">{{ $aboutSettings->stats_number ?? '500+' }}</h2>
                        <p style="font-size: 14px;">{{ $aboutSettings->stats_label ?? 'Successful Weddings Managed' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section (Moved Up) -->
    @if($teamMembers && count($teamMembers) > 0)
        <section style="padding: 100px 0; background: #f8f9fa;">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2 class="section-title">Meet Our Team</h2>
                    <p class="section-description">The passionate professionals behind your perfect event</p>
                </div>

                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 60px;">
                    @foreach($teamMembers as $member)
                        <div class="team-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}"
                            style="position: relative; height: 520px; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                            <!-- Background Image -->
                            <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}"
                                style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                            <!-- Dark Overlay -->
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; 
                                                                background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 50%, transparent 100%);
                                                                padding: 30px; text-align: center;">
                                <h3
                                    style="font-size: 24px; font-weight: 700; color: var(--primary); margin-bottom: 10px; font-family: 'Playfair Display', serif;">
                                    {{ $member->name }}
                                </h3>
                                <p style="color: #ccc; font-size: 14px; margin-bottom: 20px;">{{ $member->designation }}</p>
                                @if($member->whatsapp)
                                    <a href="https://wa.me/{{ $member->whatsapp }}" target="_blank" style="display: inline-block; background: var(--primary); color: #1a1a2e; 
                                                                              padding: 12px 35px; border-radius: 50px; font-weight: 600; 
                                                                              text-decoration: none; transition: all 0.3s ease;">
                                        WhatsApp
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Why Choose Us - Enhanced List (Moved Down) -->
    <section class="why-us" style="padding: 100px 0; background: var(--dark); color: white;">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">{{ $aboutSettings->why_badge ?? 'Why Partner With Us?' }}</span>
                <h2 class="section-title" style="color: white;">{{ $aboutSettings->why_title ?? 'The MG Difference' }}</h2>
            </div>
            <div class="services-grid">
                <div class="service-card"
                    style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                    <h3 style="color: var(--primary);">{{ $aboutSettings->card1_title ?? 'In-House Catering' }}</h3>
                    <p style="color: #ccc;">{{ $aboutSettings->card1_text ?? 'Unlike others, we have our own culinary teams specialized in Mughlai, Continental, and Pan-Asian cuisines.' }}</p>
                </div>
                <div class="service-card"
                    style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                    <h3 style="color: var(--primary);">{{ $aboutSettings->card2_title ?? 'Architectural Decor' }}</h3>
                    <p style="color: #ccc;">{{ $aboutSettings->card2_text ?? 'We design custom structural elements for your stage and backdrops, ensuring no two events look the same.' }}</p>
                </div>
                <div class="service-card"
                    style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                    <h3 style="color: var(--primary);">{{ $aboutSettings->card3_title ?? 'Vendor Network' }}</h3>
                    <p style="color: #ccc;">{{ $aboutSettings->card3_text ?? "A decade of networking gives us exclusive access to Pakistan's top photographers and performers at better rates." }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action unique for About -->
    <section style="padding: 80px 0; text-align: center; background: #fff;">
        <div class="container" data-aos="zoom-in">
            <h2>Experience the Premium Quality Yourself</h2>
            <p style="margin: 20px 0 30px; color: #666;">Schedule a visit to our Mezzanine showroom in Zamzama to see our
                decor samples.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Request a Consultation</a>
        </div>
    </section>
@endsection