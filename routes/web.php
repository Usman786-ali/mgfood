<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $clients = App\Models\Client::where('is_active', true)
        ->orderBy('order')
        ->get();

    $portfolioItems = App\Models\PortfolioItem::active()
        ->ordered()
        ->limit(3)
        ->get();

    // Get all site settings as key-value array
    $siteSettings = App\Models\SiteSetting::all()->pluck('value', 'key')->toArray();

    return view('home', compact('clients', 'portfolioItems', 'siteSettings'));
})->name('home');

Route::get('/portfolio', function () {
    $portfolioItems = App\Models\PortfolioItem::active()
        ->ordered()
        ->get();
    return view('portfolio', compact('portfolioItems'));
})->name('portfolio');

Route::get('/services', function () {
    $services = App\Models\Service::where('is_active', true)
        ->orderBy('order')
        ->get();
    return view('services', compact('services'));
})->name('services');

Route::get('/about', function () {
    $teamMembers = App\Models\TeamMember::where('is_active', true)
        ->orderBy('order')
        ->get();
    $aboutSettings = App\Models\AboutSetting::first();
    return view('about', compact('teamMembers', 'aboutSettings'));
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

Route::get('/blog', function () {
    $blogs = App\Models\Blog::where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->paginate(9);

    $featuredBlog = App\Models\Blog::where('is_published', true)
        ->where('is_featured', true)
        ->latest()
        ->first();

    return view('blog', compact('blogs', 'featuredBlog'));
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    $blog = App\Models\Blog::where('slug', $slug)
        ->where('is_published', true)
        ->firstOrFail();

    return view('blog-detail', compact('blog'));
})->name('blog.show');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest routes (login)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login']);
    });

    // Protected routes (requires authentication)
    Route::middleware(App\Http\Middleware\AdminMiddleware::class)->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

        // Blog Management
        Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);

        // Portfolio Management
        Route::resource('portfolio', App\Http\Controllers\Admin\PortfolioController::class);

        // Clients Management
        Route::resource('clients', App\Http\Controllers\Admin\ClientController::class);

        // Services Management
        Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);

        // About Page Management
        Route::get('/about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('about.index');
        Route::post('/about', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('about.update');

        // Team Members Management
        Route::resource('team', App\Http\Controllers\Admin\TeamMemberController::class);

        // Contact Form Management (includes Event Types)
        Route::prefix('contact-form')->name('contact-form.')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\ContactFormController::class, 'index'])->name('index');
            Route::get('/{submission}', [App\Http\Controllers\Admin\ContactFormController::class, 'show'])->name('show');
            Route::delete('/{submission}', [App\Http\Controllers\Admin\ContactFormController::class, 'destroy'])->name('destroy');

            // Event Types sub-section
            Route::get('/event-types/manage', [App\Http\Controllers\Admin\ContactFormController::class, 'eventTypes'])->name('event-types');
            Route::post('/event-types', [App\Http\Controllers\Admin\ContactFormController::class, 'storeEventType'])->name('event-types.store');
            Route::put('/event-types/{eventType}', [App\Http\Controllers\Admin\ContactFormController::class, 'updateEventType'])->name('event-types.update');
            Route::delete('/event-types/{eventType}', [App\Http\Controllers\Admin\ContactFormController::class, 'destroyEventType'])->name('event-types.destroy');
        });

        // Settings Management
        Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
        Route::put('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('settings.update');
    });
});
