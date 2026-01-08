@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar')
@endsection


@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold m-0">Usuarios</h2>
        <p class="text-muted small mb-0">Gestiona el acceso de los usuarios registrados en el sistema.</p>
    </div>
    <button class="btn btn-coral shadow-sm">
        <i class="fas fa-user-plus me-2"></i> Añadir Usuario
    </button>
</div>

<div class="card widget-card shadow-sm border-0 overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th class="ps-4">No.</th>
                        <th>Información del Usuario</th>
                        <th>Correo Electrónico</th>
                        <th>Estado</th>
                        <th>Fecha Registro</th>
                        <th class="text-end pe-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="ps-4 text-muted small">#{{ $user->id }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-box bg-coral-light text-coral rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-weight: 700;">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                                <div class="user-meta">
                                    <div class="fw-bold text-dark">{{ $user->name }}</div>
                                    <div class="text-muted small">ID: {{ 1000 + $user->id }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class="badge bg-success-light text-success rounded-pill px-3 py-2 small fw-normal">Activo</span>
                        </td>
                        <td class="text-muted small">{{ $user->created_at->format('d M, Y') }}</td>
                        <td class="pe-4 text-end">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-light border-0" title="Editar"><i class="far fa-edit text-muted"></i></button>
                                <button class="btn btn-sm btn-light border-0 text-danger" title="Eliminar"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer bg-white border-top py-3 px-4 d-flex justify-content-between align-items-center">
        <span class="text-muted small">Mostrando {{ $users->count() }} usuarios registrados</span>
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm m-0">
                <li class="page-item disabled"><a class="page-link border-0" href="#">Anterior</a></li>
                <li class="page-item active"><a class="page-link border-0 bg-coral" href="#">1</a></li>
                <li class="page-item"><a class="page-link border-0" href="#">Siguiente</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection
