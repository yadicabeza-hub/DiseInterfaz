<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SPA Center') }} - @yield('title', 'Dashboard')</title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts/Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --coral-primary: #ff7c7c;
            --coral-hover: #ff6666;
            --sidebar-width: 280px;
            --bg-body: #f8fafc;
            --text-menu: #64748b;
        }

        body {
            background-color: var(--bg-body) !important;
            font-family: 'Inter', sans-serif;
            color: #334155;
        }

        .dashboard-container { min-height: 100vh; }
        
        /* Sidebar */
        .sidebar { width: var(--sidebar-width); min-height: 100vh; position: sticky; top: 0; z-index: 1000; transition: all 0.3s; }
        .brand-box { width: 40px; height: 40px; }
        .bg-coral { background-color: var(--coral-primary) !important; }
        .text-coral { color: var(--coral-primary) !important; }
        .bg-coral-light { background-color: rgba(255, 124, 124, 0.1); }
        .menu-label { font-size: 0.75rem; font-weight: 700; color: #94a3b8; letter-spacing: 1.5px; }
        .sidebar .nav-link { color: var(--text-menu); padding: 12px 20px; border-radius: 8px; margin: 2px 0; font-weight: 500; transition: all 0.2s; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background-color: #f1f5f9; color: var(--coral-primary); font-weight: 700; }
        
        /* Topbar */
        .topbar { height: 75px; position: sticky; top: 0; z-index: 999; }
        .notification-dot { position: absolute; width: 10px; height: 10px; background-color: var(--coral-primary); border: 2px solid white; border-radius: 50%; top: 2px; right: 0; }
        
        /* Components */
        .widget-card { border-radius: 16px; transition: all 0.2s; border: none !important; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06); }
        .widget-card:hover { transform: translateY(-4px); box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05); }
        .btn-coral { background-color: var(--coral-primary); color: white; border: none; padding: 10px 24px; border-radius: 50px; font-weight: 600; transition: all 0.2s; }
        .btn-coral:hover { background-color: var(--coral-hover); color: white; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(255, 124, 124, 0.3); }
        .form-control, .form-select { border-radius: 10px; padding: 0.75rem 1rem; border-color: #e2e8f0; }
        .form-control:focus, .form-select:focus { border-color: var(--coral-primary); box-shadow: 0 0 0 4px rgba(255, 124, 124, 0.1); }
        .table thead th { background: #f8fafc; color: #64748b; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; padding: 1.25rem 1rem; border-bottom: 2px solid #f1f5f9; }
        
        .cursor-pointer { cursor: pointer; }
        @media (max-width: 991.98px) { .sidebar { display: none; } }
    </style>
</head>
<body>
    <div class="dashboard-container d-flex">
        @yield('sidebar')

        <div class="main-content flex-grow-1">
            @include('partials.topbar')
            
            <div class="page-body p-4 p-md-5">
                @yield('content')
            </div>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
