@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar')
@endsection


@section('content')
<div class="row g-4 mb-5">
    <!-- Metric Cards -->
    <div class="col-md-3">
        <div class="card widget-card shadow-sm border-0 p-4 h-100">
            <div class="icon-box-round mb-3 bg-coral-light text-coral" style="width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-users fs-5"></i>
            </div>
            <div class="widget-info">
                <h2 class="fw-bold m-0">{{ $stats['users'] }}</h2>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <span class="text-muted small">Clientes Registrados</span>
                    <span class="text-success small fw-bold"><i class="fas fa-arrow-up me-1"></i>12%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card widget-card shadow-sm border-0 p-4 h-100">
            <div class="icon-box-round mb-3 bg-primary-light text-primary" style="width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; background-color: rgba(13, 110, 253, 0.1);">
                <i class="fas fa-spa fs-5"></i>
            </div>
            <div class="widget-info">
                <h2 class="fw-bold m-0">{{ $stats['products'] }}</h2>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <span class="text-muted small">Servicios Activos</span>
                    <span class="text-success small fw-bold"><i class="fas fa-arrow-up me-1"></i>8%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card widget-card shadow-sm border-0 p-4 h-100">
            <div class="icon-box-round mb-3 bg-success-light text-success" style="width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; background-color: rgba(25, 135, 84, 0.1);">
                <i class="fas fa-layer-group fs-5"></i>
            </div>
            <div class="widget-info">
                <h2 class="fw-bold m-0">{{ $stats['categories'] }}</h2>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <span class="text-muted small">Categorías</span>
                    <span class="text-muted small fw-bold">Estable</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card widget-card shadow-sm border-0 p-4 h-100 bg-coral text-white">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="m-0 fw-bold">Objetivo Hoy</h5>
                <i class="fas fa-chart-line opacity-50"></i>
            </div>
            <h2 class="fw-bold m-0">$4.5k</h2>
            <p class="small opacity-75 mt-2 mb-0">¡Faltan $500 para la meta diaria!</p>
            <div class="progress mt-3 bg-white bg-opacity-25" style="height: 6px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-8">
        <div class="card widget-card shadow-sm border-0 p-4 h-100">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold m-0 text-dark">Actividad del Centro</h5>
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle border" type="button" data-bs-toggle="dropdown">Esta Semana</button>
                    <ul class="dropdown-menu border-0 shadow-sm small">
                        <li><a class="dropdown-item" href="#">Hoy</a></li>
                        <li><a class="dropdown-item" href="#">Esta Semana</a></li>
                        <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    </ul>
                </div>
            </div>
            <!-- Simple Bar graph with Bootstrap utilities -->
            <div class="activity-bars d-flex align-items-end justify-content-around mt-5" style="height: 250px;">
                @php $days = ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom']; $heights = [60, 85, 45, 95, 70, 40, 30]; @endphp
                @foreach($days as $index => $day)
                <div class="d-flex flex-column align-items-center w-100">
                    <div class="progress progress-vertical bg-light rounded-pill mb-3" style="width: 12px; height: 180px; transform: rotate(180deg);">
                        <div class="progress-bar bg-coral rounded-pill" role="progressbar" style="height: {{ $heights[$index] }}%" aria-valuenow="{{ $heights[$index] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-muted small fw-bold">{{ $day }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card widget-card shadow-sm border-0 p-4 h-100">
            <h5 class="fw-bold m-0 text-dark mb-4">Servicios Populares</h5>
            <div class="list-group list-group-flush">
                <div class="list-group-item px-0 py-3 border-0 d-flex align-items-center">
                    <div class="icon-box rounded-circle bg-light p-2 me-3 text-coral">
                        <i class="fas fa-hand-sparkles"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="m-0 fw-bold small">Masaje Relajante</h6>
                        <span class="text-muted small">45 Sesiones</span>
                    </div>
                    <span class="badge bg-coral-light text-coral rounded-pill small">+15%</span>
                </div>
                <div class="list-group-item px-0 py-3 border-0 d-flex align-items-center">
                    <div class="icon-box rounded-circle bg-light p-2 me-3 text-primary">
                        <i class="fas fa-smile"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="m-0 fw-bold small">Tratamiento Facial</h6>
                        <span class="text-muted small">32 Sesiones</span>
                    </div>
                    <span class="badge bg-light text-muted border rounded-pill small">+5%</span>
                </div>
                <div class="list-group-item px-0 py-3 border-0 d-flex align-items-center">
                    <div class="icon-box rounded-circle bg-light p-2 me-3 text-success">
                        <i class="fas fa-hot-tub-person"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="m-0 fw-bold small">Circuito de Aguas</h6>
                        <span class="text-muted small">28 Sesiones</span>
                    </div>
                    <span class="badge bg-success-light text-success rounded-pill small">+10%</span>
                </div>
            </div>
            <button class="btn btn-outline-secondary w-100 rounded-pill fw-bold mt-4 small border-gray-200">Ver Reporte Detallado</button>
        </div>
    </div>
</div>
@endsection
