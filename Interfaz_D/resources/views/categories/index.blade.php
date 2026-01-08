@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar')
@endsection


@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold m-0 text-dark">Categorías de Servicio</h2>
        <p class="text-muted small mb-0">Organiza tus servicios en grupos lógicos para un mejor catálogo.</p>
    </div>
    <a href="{{ route('categories.create') }}" class="btn btn-coral shadow-sm">
        <i class="fas fa-folder-plus me-2"></i> Nueva Categoría
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4 rounded-3" role="alert">
        <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card widget-card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th class="ps-4">Nombre de la Categoría</th>
                        <th>Descripción</th>
                        <th>Servicios Vinculados</th>
                        <th class="text-end pe-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center">
                                <div class="cat-icon bg-coral-light text-coral p-2 rounded-circle me-3" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-tag small"></i>
                                </div>
                                <span class="fw-bold text-dark">{{ $category->name }}</span>
                            </div>
                        </td>
                        <td class="text-muted small">{{ $category->description ?? 'Sin descripción' }}</td>
                        <td>
                            <span class="badge bg-light text-muted border px-2 py-1 rounded small fw-normal">
                                {{ $category->products_count ?? $category->products->count() }} servicios
                            </span>
                        </td>
                        <td class="pe-4 text-end">
                            <div class="btn-group">
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-light border-0" title="Editar"><i class="far fa-edit text-muted"></i></a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar esta categoría? Los productos asociados podrían quedar sin categoría.')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light border-0 text-danger" title="Eliminar"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5">
                            <div class="text-muted">
                                <i class="fas fa-folder-open fs-2 mb-3 d-block opacity-25"></i>
                                No hay categorías registradas.
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
