@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar')
@endsection


@section('content')
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb small">
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}" class="text-coral text-decoration-none">Categorías</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Categoría</li>
        </ol>
    </nav>
    <h2 class="fw-bold m-0 text-dark">Editar Categoría</h2>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card widget-card shadow-sm border-0">
            <div class="card-header bg-white py-3 border-bottom">
                <h6 class="m-0 fw-bold text-dark"><i class="fas fa-edit text-coral me-2"></i>Actualizar Clasificación</h6>
            </div>
            <div class="card-body p-4 p-md-5">
                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label small fw-bold text-muted">Nombre de la Categoría</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold text-muted">Descripción</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description', $category->description) }}</textarea>
                            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2 mt-5">
                        <a href="{{ route('categories.index') }}" class="btn btn-light border rounded-pill px-4 fw-bold">Descartar</a>
                        <button type="submit" class="btn btn-coral shadow-sm px-5 rounded-pill fw-bold">Actualizar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
