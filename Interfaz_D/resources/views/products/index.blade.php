@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar')
@endsection


@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold m-0 text-dark">Servicios y Productos</h2>
        <p class="text-muted small mb-0">Administra el catálogo completo de tratamientos y servicios del spa.</p>
    </div>
    <a href="{{ route('products.create') }}" class="btn btn-coral shadow-sm">
        <i class="fas fa-plus me-2"></i> Nuevo Servicio
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
                        <th class="ps-4">Servicio / Tratamiento</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Disponibilidad</th>
                        <th>Estado</th>
                        <th class="text-end pe-4">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center">
                                <div class="product-avatar bg-light p-2 rounded-3 me-3 text-coral">
                                    <i class="fas fa-spa fs-5"></i>
                                </div>
                                <div class="product-name">
                                    <div class="fw-bold text-dark">{{ $product->name }}</div>
                                    <div class="text-muted small">REF: PRD-{{ 100 + $product->id }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light text-muted border px-2 py-1 rounded small fw-normal">
                                {{ $product->category->name ?? 'Sin asignar' }}
                            </span>
                        </td>
                        <td><span class="fw-bold text-dark">${{ number_format($product->price, 2) }}</span></td>
                        <td>
                            @if($product->stock > 0)
                                <span class="text-success small fw-medium"><i class="fas fa-check-circle me-1"></i>{{ $product->stock }} disponibles</span>
                            @else
                                <span class="text-danger small fw-medium"><i class="fas fa-times-circle me-1"></i>Agotado</span>
                            @endif
                        </td>
                        <td>
                            @if($product->status == 'active')
                                <span class="badge bg-success-light text-success rounded-pill px-3 py-1 small fw-normal">Activo</span>
                            @else
                                <span class="badge bg-secondary-light text-secondary rounded-pill px-3 py-1 small fw-normal">Inactivo</span>
                            @endif
                        </td>
                        <td class="pe-4 text-end">
                            <div class="btn-group">
                                <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-light border-0" title="Ver"><i class="far fa-eye text-muted"></i></a>
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-light border-0" title="Editar"><i class="far fa-edit text-muted"></i></a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Confirmas que deseas eliminar este servicio?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light border-0 text-danger" title="Eliminar"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5">
                            <div class="text-muted">
                                <i class="fas fa-box-open fs-2 mb-3 d-block opacity-25"></i>
                                No hay productos en el catálogo actualmente.
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
