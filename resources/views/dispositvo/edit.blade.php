@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-white mb-4">Editar Dispositivo</h2>

    <!-- Formulario para editar un dispositivo -->
    <form action="{{ route('dispositivo.update', $dispositivo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="identificador" class="text-white">ID</label>
            <input type="text" name="identificador" id="identificador" class="form-control" value="{{ $dispositivo->identificador }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_ingreso" class="text-white">Fecha de ingreso</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="{{ $dispositivo->fecha_ingreso }}" required>
        </div>
        <div class="form-group">
            <label for="tipo_servicio" class="text-white">Tipo de servicio</label>
            <input type="text" name="tipo_servicio" id="tipo_servicio" class="form-control" value="{{ $dispositivo->tipo_servicio }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion" class="text-white">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $dispositivo->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="foto1" class="text-white">Foto 1</label>
            <input type="file" name="foto1" id="foto1" class="form-control">
            <img src="{{ asset('storage/' . $dispositivo->foto1) }}" alt="Foto 1" width="100" class="mt-2">
        </div>
        <div class="form-group">
            <label for="foto2" class="text-white">Foto 2</label>
            <input type="file" name="foto2" id="foto2" class="form-control">
            <img src="{{ asset('storage/' . $dispositivo->foto2) }}" alt="Foto 2" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    <!-- Botón para regresar a la lista -->
    <a href="{{ route('empleado.index') }}" class="btn btn-secondary mt-4">Regresar a la lista</a>
</div>
@endsection
