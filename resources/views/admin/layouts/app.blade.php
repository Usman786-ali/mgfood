<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/admin-styles.css') }}">
</head>

<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>MG Food & Event Planners</h2>
                <p>Admin Panel</p>
            </div>

            <nav class="sidebar-nav">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <span class="icon">📊</span>
                    Dashboard
                </a>
                <a href="{{ route('admin.blogs.index') }}"
                    class="nav-item {{ Request::is('admin/blogs*') ? 'active' : '' }}">
                    <span class="icon">📝</span>
                    Blog Posts
                </a>
                <a href="{{ route('admin.portfolio.index') }}"
                    class="nav-item {{ Request::is('admin/portfolio*') ? 'active' : '' }}">
                    <span class="icon">🖼️</span>
                    Portfolio
                </a>
                <a href="{{ route('admin.clients.index') }}"
                    class="nav-item {{ Request::is('admin/clients*') ? 'active' : '' }}">
                    <span class="icon">👥</span>
                    Client Logos
                </a>
                <a href="{{ route('admin.services.index') }}"
                    class="nav-item {{ Request::is('admin/services*') ? 'active' : '' }}">
                    <span class="icon">🎯</span>
                    Services
                </a>
                <a href="{{ route('admin.about.index') }}"
                    class="nav-item {{ Request::is('admin/about*') ? 'active' : '' }}">
                    <span class="icon">ℹ️</span>
                    About Page
                </a>
                <a href="{{ route('admin.team.index') }}"
                    class="nav-item {{ Request::is('admin/team*') ? 'active' : '' }}">
                    <span class="icon">👥</span>
                    Team Members
                </a>
                <a href="{{ route('admin.settings.index') }}"
                    class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
                    <span class="icon">⚙️</span>
                    Site Settings
                </a>
            </nav>

            <div class="sidebar-footer">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <span class="icon">🚪</span>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="topbar">
                <h1>@yield('page-title', 'Dashboard')</h1>
                <div class="topbar-actions">
                    <span class="user-info">Welcome, {{ Auth::guard('admin')->user()->name }}</span>
                </div>
            </div>

            <div class="content-area">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/admin-scripts.js') }}"></script>
    @yield('scripts')
</body>

</html>