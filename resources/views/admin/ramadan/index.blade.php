@extends('admin.layouts.app')

@section('page-title', 'Ramadan Settings')

@section('content')
    <div class="form-card">
        <h2 style="margin-bottom: 30px; font-size: 24px; font-weight: 700;">🌙 Ramadan Settings</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.ramadan.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="admin-section-box"
                style="background: #fff8e1; padding: 25px; border-radius: 12px; margin-bottom: 30px; border-left: 4px solid #fbc02d;">

                <h4 style="margin: 0 0 15px; color: #f9a825; border-bottom: 2px solid #fdd835; padding-bottom: 10px;">
                    🏠 Home Page Section
                </h4>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label for="ramadan_home_heading">Section Title</label>
                        <input type="text" id="ramadan_home_heading" name="ramadan_home_heading"
                            value="{{ $settings->where('key', 'ramadan_home_heading')->first()->value ?? 'Ramadan Special Offers' }}">
                    </div>
                    <div class="form-group">
                        <label for="ramadan_home_badge">Badge Text</label>
                        <input type="text" id="ramadan_home_badge" name="ramadan_home_badge"
                            value="{{ $settings->where('key', 'ramadan_home_badge')->first()->value ?? 'Coming Soon' }}">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label for="ramadan_home_food_title">Food Card Title</label>
                        <input type="text" id="ramadan_home_food_title" name="ramadan_home_food_title"
                            value="{{ $settings->where('key', 'ramadan_home_food_title')->first()->value ?? 'Exclusive Food Packages' }}">
                    </div>
                    <div class="form-group">
                        <label for="ramadan_home_decor_title">Decor Card Title</label>
                        <input type="text" id="ramadan_home_decor_title" name="ramadan_home_decor_title"
                            value="{{ $settings->where('key', 'ramadan_home_decor_title')->first()->value ?? 'Decor Discount Packages' }}">
                    </div>
                </div>

                <h4 style="margin: 30px 0 15px; color: #f9a825; border-bottom: 2px solid #fdd835; padding-bottom: 10px;">
                    🍲 Food Page Settings
                </h4>

                <div class="form-group">
                    <label for="ramadan_food_hero_bg">Food Page Hero Image</label>
                    <input type="file" id="ramadan_food_hero_bg" name="ramadan_food_hero_bg" accept="image/*">
                    @if($settings->where('key', 'ramadan_food_hero_bg')->first())
                        <img src="{{ asset('storage/' . $settings->where('key', 'ramadan_food_hero_bg')->first()->value) }}"
                            style="max-width: 200px; margin-top: 10px; border-radius: 8px;">
                    @endif
                </div>

                <div class="form-group">
                    <label for="ramadan_food_iftar_menu">Iftar Menu List (One item per line | Add 'Coming Soon' after ||
                        separator for status)</label>
                    <textarea id="ramadan_food_iftar_menu" name="ramadan_food_iftar_menu" rows="5"
                        placeholder="Premium Iftar Platter || Coming Soon
    Chicken Biryani Deal || Available Now">{{ $settings->where('key', 'ramadan_food_iftar_menu')->first()->value ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="ramadan_food_sehar_menu">Sehar Menu List (One item per line)</label>
                    <textarea id="ramadan_food_sehar_menu" name="ramadan_food_sehar_menu" rows="5"
                        placeholder="Traditional Desi Sehar || Coming Soon">{{ $settings->where('key', 'ramadan_food_sehar_menu')->first()->value ?? '' }}</textarea>
                </div>

                <h4 style="margin: 30px 0 15px; color: #f9a825; border-bottom: 2px solid #fdd835; padding-bottom: 10px;">
                    ✨ Decor Page Settings
                </h4>

                <div class="form-group">
                    <label for="ramadan_decor_hero_bg">Decor Page Hero Image</label>
                    <input type="file" id="ramadan_decor_hero_bg" name="ramadan_decor_hero_bg" accept="image/*">
                    @if($settings->where('key', 'ramadan_decor_hero_bg')->first())
                        <img src="{{ asset('storage/' . $settings->where('key', 'ramadan_decor_hero_bg')->first()->value) }}"
                            style="max-width: 200px; margin-top: 10px; border-radius: 8px;">
                    @endif
                </div>

                <div class="form-group">
                    <label for="ramadan_decor_menu">Decor Packages List (One item per line)</label>
                    <textarea id="ramadan_decor_menu" name="ramadan_decor_menu" rows="5"
                        placeholder="Arabic Lantern Setup || Coming Soon">{{ $settings->where('key', 'ramadan_decor_menu')->first()->value ?? '' }}</textarea>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Ramadan Settings</button>
            </div>
        </form>
    </div>
@endsection

@push('styles')
    <style>
        .alert-success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
    </style>
@endpush