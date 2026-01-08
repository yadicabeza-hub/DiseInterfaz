@extends('layouts.app')

@section('content')
<div class="auth-wrapper d-flex align-items-center justify-content-center bg-gray-50 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- TailAdmin-Style Auth Card -->
                <div class="auth-card shadow-sm border bg-white rounded-3 overflow-hidden">
                    <div class="card-header-accent bg-coral" style="height: 4px;"></div>
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <div class="brand-logo-box bg-coral d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-spa text-white fs-3"></i>
                            </div>
                            <h2 class="fw-bold m-0"><span class="text-coral">SPA</span> Center</h2>
                            <p class="text-muted small mt-2">Crea tu cuenta y comienza tu transformación</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label for="name" class="form-label small fw-bold text-dark">Nombre Completo</label>
                                    <div class="position-relative">
                                        <span class="position-absolute ms-3 top-50 translate-middle-y text-muted"><i class="far fa-user"></i></span>
                                        <input id="name" type="text" class="form-control ps-5 py-2-5 border-gray-200 rounded-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Tu nombre">
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label small fw-bold text-dark">Correo Electrónico</label>
                                    <div class="position-relative">
                                        <span class="position-absolute ms-3 top-50 translate-middle-y text-muted"><i class="far fa-envelope"></i></span>
                                        <input id="email" type="email" class="form-control ps-5 py-2-5 border-gray-200 rounded-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="nombre@ejemplo.com">
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label for="password" class="form-label small fw-bold text-dark">Contraseña</label>
                                    <div class="position-relative">
                                        <span class="position-absolute ms-3 top-50 translate-middle-y text-muted"><i class="fas fa-lock"></i></span>
                                        <input id="password" type="password" class="form-control ps-5 py-2-5 border-gray-200 rounded-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mínimo 8 caracteres">
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="password-confirm" class="form-label small fw-bold text-dark">Confirmar Contraseña</label>
                                    <div class="position-relative">
                                        <span class="position-absolute ms-3 top-50 translate-middle-y text-muted"><i class="fas fa-shield-alt"></i></span>
                                        <input id="password-confirm" type="password" class="form-control ps-5 py-2-5 border-gray-200 rounded-2" name="password_confirmation" required autocomplete="new-password" placeholder="Repite tu contraseña">
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid mb-5">
                                <button type="submit" class="btn btn-coral py-2-5 fw-bold text-white shadow-sm rounded-2">
                                    Crear mi Cuenta
                                </button>
                            </div>

                            <div class="text-center pt-3 border-top">
                                <p class="small text-muted mb-0">¿Ya tienes una cuenta? 
                                    <a href="{{ route('login') }}" class="text-coral fw-bold text-decoration-none">Inicia sesión aquí</a>
                                </p>
                            </div>
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
