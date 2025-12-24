@extends('layouts.app')

@section('title', 'Detailed Services - MG Food & Event Planners')

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="
                min-height: 65vh; 
                padding-top: 160px;
                background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                            url('{{ asset('images/Services-Background.jpeg') }}') center/cover;
                background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <span class="hero-badge" data-aos="fade-up">OUR EXPERTISE</span>
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                    Complete Event Solutions <span class="highlight">Under One Roof</span>
                </h1>
                <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                    At MG Food & Event Planner, we provide a complete range of event planning and management services,
                    covering every aspect of your event from concept creation to final execution. Our specialized teams
                    handle planning, décor, catering, logistics, and on-site coordination to ensure a seamless and
                    stress-free experience.
                </p>
            </div>
        </div>
    </section>


    <!-- Dynamic Services Sections -->
    @forelse($services as $index => $service)
        <section style="padding: 100px 0; {{ $index % 2 != 0 ? 'background: #fdfaf5;' : '' }}">
            <div class="container">
                <div class="about-grid"
                    style="align-items: center; {{ $index % 2 != 0 ? 'grid-template-columns: 1fr 1fr;' : '' }}">
                    <div class="about-image" data-aos="fade-{{ $index % 2 == 0 ? 'right' : 'left' }}"
                        style="{{ $index % 2 != 0 ? 'order: 1;' : '' }}">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                            style="border-radius: 20px;">
                    </div>
                    <div class="about-content" data-aos="fade-{{ $index % 2 == 0 ? 'left' : 'right' }}"
                        style="{{ $index % 2 != 0 ? 'order: 2;' : '' }}">
                        <h2 class="section-title" style="text-align: left;">{!! $service->title !!}</h2>
                        <p class="section-description" style="text-align: left; margin: 0 0 30px;">
                            {{ $service->description }}
                        </p>


                        @if($service->features && is_array($service->features) && count($service->features) > 0)
                            <ul class="service-details" style="list-style: none; padding: 0;">
                                @foreach($service->features as $featureIndex => $feature)
                                    <li style="margin-bottom: 15px; display: flex; align-items: center;">
                                        <span
                                            style="color: var(--primary); margin-right: 15px; font-weight: bold;">{{ str_pad($featureIndex + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif


                        @if($service->button_text && $service->button_link)
                            <a href="{{ $service->button_link }}" class="btn btn-primary"
                                style="margin-top: 30px;">{{ $service->button_text }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @empty
        <section style="padding: 100px 0;">
            <div class="container" style="text-align: center;">
                <h3>No services available yet.</h3>
                <p style="color: #777;">Please check back later.</p>
            </div>
        </section>
    @endforelse

    <!-- Services Grid: Specialized Add-ons -->
    <section style="padding: 100px 0;">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Specialized Event Add-ons</h2>
                <p class="section-description">The magic is in the details. We provide niche services to elevate the guest
                    experience.</p>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div style="font-size: 40px; margin-bottom: 20px;">🍲</div>
                    <h3>Gourmet Catering</h3>
                    <p>Live BBQ counters, artisanal dessert bars, and customized multi-cuisine menus.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div style="font-size: 40px; margin-bottom: 20px;">📸</div>
                    <h3>Media Production</h3>
                    <p>Cinematic wedding films, 360 photobooths, and professional event coverage.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div style="font-size: 40px; margin-bottom: 20px;">🎪</div>
                    <h3>Structrual Decor</h3>
                    <p>Custom-built entrance gates, dance floors, and weather-proof outdoor setups.</p>
                </div>
            </div>
        </div>
    </section>
@endsection