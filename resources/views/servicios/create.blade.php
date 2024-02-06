@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Nuevo Servicio</h2>
        <form action="{{ route('servicios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="duracion">Duración (min):</label>
                <input type="number" class="form-control" id="duracion" name="duracion" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection