<header class="topbar bg-white px-4 py-2 border-bottom d-flex align-items-center justify-content-between">
    <div class="search-box d-flex align-items-center flex-grow-1 mx-3 px-3 bg-light rounded-pill" style="max-width: 500px;">
        <i class="fas fa-search text-muted me-2"></i>
        <input type="text" class="form-control bg-transparent border-0 shadow-none py-2" placeholder="Buscar en el sistema...">
    </div>

    <div class="header-actions d-flex align-items-center">
        <div class="action-item me-4 position-relative d-none d-md-block">
            <i class="far fa-bell fs-5 text-muted cursor-pointer"></i>
            <span class="notification-dot"></span>
        </div>
        <div class="dropdown">
            <div class="user-profile d-flex align-items-center cursor-pointer dropdown-toggle shadow-none" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-info text-end me-2 d-none d-sm-block">
                    <div class="fw-bold small">{{ Auth::user()->name }}</div>
                    <div class="text-muted" style="font-size: 0.7rem;">Administrador</div>
                </div>
                <img src="https://i.pravatar.cc/40?u={{ Auth::user()->id }}" class="rounded-circle border" alt="Avatar">
            </div>
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm rounded-3 mt-2">
                <li><a class="dropdown-item py-2 small" href="#"><i class="far fa-user me-2 text-muted"></i> Mi Perfil</a></li>
                <li><a class="dropdown-item py-2 small" href="#"><i class="fas fa-cog me-2 text-muted"></i> Configuración</a></li>
                <li><hr class="dropdown-divider opacity-50"></li>
                <li>
                    <a class="dropdown-item py-2 small text-danger fw-bold" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt me-2"></i> Cerrar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
