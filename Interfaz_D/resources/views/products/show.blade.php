@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar')
@endsection


@section('content')
<div class="mb-4 d-flex justify-content-between align-items-end">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}" class="text-coral text-decoration-none">Servicios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalle del Servicio</li>
            </ol>
        </nav>
        <h2 class="fw-bold m-0 text-dark">{{ $product->name }}</h2>
    </div>
    <div class="btn-group shadow-sm rounded-pill overflow-hidden">
        <a href="{{ route('products.edit', $product) }}" class="btn btn-light border-0 px-4 py-2 small fw-bold"><i class="far fa-edit me-2"></i>Editar</a>
        <a href="{{ route('products.index') }}" class="btn btn-coral border-0 px-4 py-2 small fw-bold"><i class="fas fa-list me-2"></i>Catálogo</a>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-8">
        <div class="card widget-card shadow-sm border-0 mb-4 h-100">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-5">
                    <div class="display-icon bg-coral-light text-coral rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 80px; height: 80px; font-size: 2.5rem;">
                        <i class="fas fa-spa"></i>
                    </div>
                    <div>
                        <span class="badge bg-light text-muted border rounded-pill px-3 py-2 small mb-2 fw-normal">{{ $product->category->name ?? 'Sin asignar' }}</span>
                        <h3 class="fw-bold text-dark m-0">{{ $product->name }}</h3>
                    </div>
                </div>

                <h6 class="fw-bold text-muted text-uppercase small letter-spacing-1 mb-4">Información del Servicio</h6>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <label class="text-muted small fw-bold d-block mb-1">Precio Unitario</label>
                            <span class="h4 fw-bold text-dark m-0">${{ number_format($product->price, 2) }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <label class="text-muted small fw-bold d-block mb-1">Estado de Venta</label>
                            @if($product->status == 'active')
                                <span class="h4 fw-bold text-success m-0"><i class="fas fa-check-circle me-2"></i>Activo</span>
                            @else
                                <span class="h4 fw-bold text-secondary m-0"><i class="fas fa-times-circle me-2"></i>Inactivo</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <label class="text-muted small fw-bold d-block mb-1">Stock Disponible</label>
                            <span class="h4 fw-bold text-dark m-0">{{ $product->stock }} <small class="text-muted fw-normal">unidades</small></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <label class="text-muted small fw-bold d-block mb-1">Referencia</label>
                            <span class="h4 fw-bold text-dark m-0">PRD-{{ 100 + $product->id }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card widget-card shadow-sm border-0 h-100 bg-light">
            <div class="card-body p-4 p-md-5 d-flex flex-column align-items-center justify-content-center text-center">
                <div class="qr-placeholder bg-white p-3 rounded-4 shadow-sm border mb-4" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center;">
                   <i class="fas fa-qrcode fs-1 opacity-25"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Código QR de Servicio</h5>
                <p class="text-muted small mb-4">Escanea para ver el servicio en el catálogo público o gestionar inventario rápido.</p>
                <button class="btn btn-outline-coral rounded-pill w-100 fw-bold shadow-sm">Descargar Ticket</button>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .letter-spacing-1 { letter-spacing: 1px; }
    .btn-outline-coral { border: 2px solid var(--coral-primary); color: var(--coral-primary); background: transparent; padding: 10px 24px; }
    .btn-outline-coral:hover { background: var(--coral-primary); color: white; }
</style>
