@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar-client')
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card widget-card border-0 p-5 text-center bg-white rounded-4 shadow-sm">
            <div class="icon-box-round bg-coral-light text-coral mx-auto mb-4" style="width: 100px; height: 100px; font-size: 3rem; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-spa"></i>
            </div>
            <h1 class="fw-bold mb-3 display-5">¡Bienvenido a tu Oasis!</h1>
            <p class="text-muted lead mb-5 px-lg-5">Estamos felices de verte de nuevo, <span class="text-coral fw-bold">{{ Auth::user()->name }}</span>. Hemos preparado nuevas experiencias de relajación diseñadas especialmente para ti.</p>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-4 border hover-shadow transition-all">
                        <i class="far fa-calendar-alt fs-2 text-coral mb-3"></i>
                        <h5 class="fw-bold mb-2">Reserva una Cita</h5>
                        <p class="small text-muted">Elige tu tratamiento favorito y fecha ideal.</p>
                        <a href="/" class="btn btn-sm btn-coral rounded-pill px-3">Explorar</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-4 border hover-shadow transition-all">
                        <i class="fas fa-gift fs-2 text-primary mb-3"></i>
                        <h5 class="fw-bold mb-2">Mis Descuentos</h5>
                        <p class="small text-muted">Tienes 2 cupones activos para tu próximo SPA.</p>
                        <button class="btn btn-sm btn-outline-primary rounded-pill px-3">Ver Cupones</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-4 border hover-shadow transition-all">
                        <i class="fas fa-star fs-2 text-warning mb-3"></i>
                        <h5 class="fw-bold mb-2">Puntos SPA</h5>
                        <p class="small text-muted">Has acumulado 450 puntos este mes.</p>
                        <button class="btn btn-sm btn-outline-warning rounded-pill px-3">Canjear</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-shadow:hover { border-color: var(--coral-primary) !important; background-color: white !important; }
    .transition-all { transition: all 0.3s ease; }
</style>
@endsection
