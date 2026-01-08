<aside id="sidebar" class="sidebar bg-white border-end">
    <div class="sidebar-header px-4 py-4 d-flex align-items-center">
        <div class="brand-box bg-coral p-2 rounded d-inline-flex align-items-center justify-content-center me-2">
            <i class="fas fa-spa text-white"></i>
        </div>
        <h4 class="m-0 fw-bold brand-text"><span class="text-coral">SPA</span> Center</h4>
    </div>

    <div class="sidebar-menu px-3">
        <div class="menu-label px-3 pt-4 mb-2">MENÚ</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-th-large me-3"></i> Panel
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users') }}" class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                    <i class="far fa-user me-3"></i> Usuarios
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('products.index') }}" class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}">
                    <i class="fas fa-spa me-3"></i> Servicios
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                    <i class="fas fa-layer-group me-3"></i> Categorías
                </a>
            </li>
        </ul>

        <div class="menu-label px-3 pt-4 mb-2">OTROS</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-calendar-alt me-3"></i> Calendario
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-chart-bar me-3"></i> Reportes
                </a>
            </li>
        </ul>
    </div>
</aside>
