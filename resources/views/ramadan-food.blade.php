@extends('layouts.app')

@section('title', 'Ramadan Food Packages - MG Food & Event Planners')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/ramadan-style.css') }}?v={{ time() }}">
    <style>
        .ramadan-hero {
            position: relative;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1633945274405-b6c8069047b0?w=1600&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 180px 0 100px;
            color: white;
            text-align: left;
        }

        .details-section {
            padding: 100px 0;
            background: #fff;
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .package-image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .package-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .package-image-container:hover .package-image {
            transform: scale(1.05);
        }

        .package-content h3 {
            font-family: var(--font-display);
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .package-content .highlight-text {
            color: var(--primary);
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
            display: block;
        }

        .package-description {
            font-size: 18px;
            line-height: 1.8;
            color: #666;
            margin-bottom: 30px;
        }

        .menu-list {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }

        .menu-list li {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px;
            color: var(--dark);
        }

        .menu-list li:last-child {
            border-bottom: none;
        }

        .menu-list li strong {
            background: rgba(212, 168, 83, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            text-transform: uppercase;
        }

        @media (max-width: 991px) {
            .details-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .package-image {
                height: 350px;
            }

            .ramadan-hero {
                text-align: center;
                padding-top: 150px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="ramadan-hero"
        style="@if (\App\Models\SiteSetting::get('ramadan_food_hero_bg')) background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('storage/' . \App\Models\SiteSetting::get('ramadan_food_hero_bg')) }}'); @endif">
        <div class="container">
            <div data-aos="fade-up">
                <span class="ramadan-title-badge"
                    style="background: rgba(255,255,255,0.1); color: #fff; border-color: #fff;">Coming Soon</span>
                <h1 class="hero-title" style="margin-top: 20px;">Ramadan <span class="highlight">Food Menu</span></h1>
                <p class="hero-description" style="max-width: 600px; margin-top: 20px;">
                    Experience the traditional taste of Ramadan with our hygienic and delicious food packages.
                    From corporate Iftars to family Suhoors, we serve perfection.
                </p>
            </div>
        </div>
    </section>

    <!-- Iftar Menu Section -->
    <section class="details-section">
        <div class="container">
            <div class="details-grid">
                <div class="package-content" data-aos="fade-right">
                    <span class="highlight-text">Breaking Fast with Joy</span>
                    <h3>Exclusive Iftar Menus</h3>
                    <p class="package-description">
                        From traditional fruit chaat and samosas to premium dinner buffets, our Iftar menus are designed to
                        cater to every taste.
                        Perfect for corporate gatherings and family reunions.
                    </p>

                    <ul class="menu-list">
                        @php
                            $iftarMenu = \App\Models\SiteSetting::get('ramadan_food_iftar_menu', "Premium Iftar Platter || Coming Soon\nCorporate Iftar Buffet || Coming Soon\nLive Fried Station || Coming Soon\nSpecial Drinks & Desserts || Coming Soon");
                            $iftarItems = explode("\n", $iftarMenu);
                        @endphp
                        @foreach ($iftarItems as $item)
                            @php $parts = explode('||', $item); @endphp
                            <li>
                                <span>{{ trim($parts[0]) }}</span>
                                @if (isset($parts[1]))
                                    <strong>{{ trim($parts[1]) }}</strong>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('contact') }}" class="btn btn-primary">Book Iftar</a>
                </div>
                <div class="package-image-container" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&q=80" alt="Iftar Feast"
                        class="package-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Separator -->
    <div style="height: 1px; background: linear-gradient(to right, transparent, #e0e0e0, transparent);"></div>

    <!-- Sehar Menu Section -->
    <section class="details-section" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="details-grid">
                <!-- Image on Left for variation -->
                <div class="package-image-container" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?w=800&q=80" alt="Sehar Meal"
                        class="package-image">
                </div>

                <div class="package-content" data-aos="fade-left">
                    <span class="highlight-text">Start Your Fast Right</span>
                    <h3>Wholesome Sehar Menus</h3>
                    <p class="package-description">
                        Begin your fast with energy and taste. Our Sehar packages include traditional parathas, lassi,
                        yogurt, and a variety of curries
                        to keep you energized throughout the day.
                    </p>

                    <ul class="menu-list">
                        @php
                            $seharMenu = \App\Models\SiteSetting::get('ramadan_food_sehar_menu', "Traditional Desi Sehar || Coming Soon\nLassi & Yogurt Deals || Coming Soon\nOmelette & Paratha Box || Coming Soon\nFull Night Live Tandoor || Coming Soon");
                            $seharItems = explode("\n", $seharMenu);
                        @endphp
                        @foreach ($seharItems as $item)
                            @php $parts = explode('||', $item); @endphp
                            <li>
                                <span>{{ trim($parts[0]) }}</span>
                                @if (isset($parts[1]))
                                    <strong>{{ trim($parts[1]) }}</strong>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('contact') }}" class="btn btn-primary">Book Sehar</a>
                </div>
            </div>
        </div>
    </section>
@endsection