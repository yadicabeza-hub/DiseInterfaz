@extends('layouts.app')

@section('content')
<div class="auth-wrapper d-flex align-items-center justify-content-center bg-gray-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <!-- TailAdmin-Style Auth Card -->
                <div class="auth-card shadow-sm border bg-white rounded-3 overflow-hidden">
                    <div class="card-header-accent bg-coral" style="height: 4px;"></div>
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <div class="brand-logo-box bg-coral d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-spa text-white fs-3"></i>
                            </div>
                            <h2 class="fw-bold m-0"><span class="text-coral">SPA</span> Center</h2>
                            <p class="text-muted small mt-2">Accede a tu cuenta profesional</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="form-label small fw-bold text-dark">Correo Electrónico</label>
                                <div class="position-relative">
                                    <span class="position-absolute ms-3 top-50 translate-middle-y text-muted"><i class="far fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control ps-5 py-2-5 border-gray-200 rounded-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="nombre@ejemplo.com">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label small fw-bold text-dark">Contraseña</label>
                                <div class="position-relative">
                                    <span class="position-absolute ms-3 top-50 translate-middle-y text-muted"><i class="fas fa-lock"></i></span>
                                    <input id="password" type="password" class="form-control ps-5 py-2-5 border-gray-200 rounded-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Tu contraseña">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input border-gray-300" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label small text-muted" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="small text-coral text-decoration-none fw-medium" href="{{ route('password.request') }}">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                            </div>

                            <div class="d-grid mb-5">
                                <button type="submit" class="btn btn-coral py-2-5 fw-bold text-white shadow-sm rounded-2">
                                    Iniciar Sesión
                                </button>
                            </div>

                            @if (Route::has('register'))
                                <div class="text-center pt-3 border-top">
                                    <p class="small text-muted mb-0">¿No tienes una cuenta? 
                                        <a href="{{ route('register') }}" class="text-coral fw-bold text-decoration-none">Regístrate gratis</a>
                                    </p>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="text-muted small">&copy; 2025 SPA Center. Todo los derechos reservados.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --coral-primary: #ff7c7c;
        --bg-auth: #f8fafc;
    }

    body { background-color: var(--bg-auth) !important; font-family: 'Inter', sans-serif; }
    .auth-wrapper { min-height: 90vh; }
    .auth-card { border-color: #e2e8f0 !important; }
    .text-coral { color: var(--coral-primary) !important; }
    .bg-coral { background-color: var(--coral-primary) !important; }
    
    .btn-coral { background-color: var(--coral-primary); border: none; }
    .btn-coral:hover { background-color: #ff6666; transform: translateY(-1px); transition: all 0.2s; }
    
    .py-2-5 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
    .border-gray-200 { border-color: #e2e8f0; }
    .form-control:focus { border-color: var(--coral-primary); box-shadow: 0 0 0 4px rgba(255, 124, 124, 0.1); }
</style>
@endsection
