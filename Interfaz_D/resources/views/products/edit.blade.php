@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar')
@endsection


@section('content')
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb small">
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}" class="text-coral text-decoration-none">Servicios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Servicio</li>
        </ol>
    </nav>
    <h2 class="fw-bold m-0">Editar: {{ $product->name }}</h2>
</div>

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card widget-card shadow-sm border-0">
            <div class="card-header bg-white py-3 border-bottom">
                <h6 class="m-0 fw-bold text-dark"><i class="fas fa-edit text-coral me-2"></i>Actualizar Información</h6>
            </div>
            <div class="card-body p-4 p-md-5">
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-muted">Nombre del Servicio</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-muted">Categoría</label>
                            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold text-muted">Precio Base ($)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-gray-200 text-muted">$</span>
                                <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" required>
                            </div>
                            @error('price') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold text-muted">Stock / Disponibilidad</label>
                            <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product->stock) }}" required>
                            @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold text-muted">Estado</label>
                            <select name="status" class="form-select @error('status') is-invalid @enderror" required>
                                <option value="active" {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Activo</option>
                                <option value="inactive" {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                            </select>
                            @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2 mt-5">
                        <a href="{{ route('products.index') }}" class="btn btn-light border rounded-pill px-4 fw-bold">Descartar</a>
                        <button type="submit" class="btn btn-coral shadow-sm px-5 rounded-pill fw-bold">Actualizar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
