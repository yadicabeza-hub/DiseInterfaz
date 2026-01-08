<aside id="sidebar" class="sidebar bg-white border-end">
    <div class="sidebar-header px-4 py-4 d-flex align-items-center">
        <div class="brand-box bg-coral p-2 rounded d-inline-flex align-items-center justify-content-center me-2">
            <i class="fas fa-spa text-white"></i>
        </div>
        <h4 class="m-0 fw-bold brand-text"><span class="text-coral">SPA</span> Center</h4>
    </div>

    <div class="sidebar-menu px-3">
        <div class="menu-label px-3 pt-4 mb-2">MI OASIS</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    <i class="fas fa-home me-3"></i> Inicio
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-calendar-check me-3"></i> Mis Citas
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-heart me-3"></i> Favoritos
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-history me-3"></i> Historial
                </a>
            </li>
        </ul>

        <div class="menu-label px-3 pt-4 mb-2">CONFIGURACIÓN</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-user me-3"></i> Mi Perfil
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-shield-alt me-3"></i> Seguridad
                </a>
            </li>
        </ul>
    </div>
</aside>
