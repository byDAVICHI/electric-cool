@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-black mb-4">Agregar Dispositivo en Reparación</h2>

    <!-- Formulario para agregar un dispositivo -->
    <form action="{{ route('dispositivo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="identificador" class="text-black">ID</label>
            <input type="text" name="identificador" id="identificador" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_ingreso" class="text-black">Fecha de ingreso</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tipo_servicio" class="text-black">Tipo de servicio</label>
            <input type="text" name="tipo_servicio" id="tipo_servicio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion" class="text-black">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="foto1" class="text-black">Foto 1</label>
            <input type="file" name="foto1" id="foto1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="foto2" class="text-black">Foto 2</label>
            <input type="file" name="foto2" id="foto2" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

    <!-- Tabla para mostrar los dispositivos agregados -->
    <h2 class="text-center text-black my-4">Lista de Dispositivos</h2>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Ingreso</th>
                <th>Tipo de Servicio</th>
                <th>Descripción</th>
                <th>Foto 1</th>
                <th>Foto 2</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dispositivos as $dispositivo)
            <tr>
                <td>{{ $dispositivo->identificador }}</td>
                <td>{{ $dispositivo->fecha_ingreso }}</td>
                <td>{{ $dispositivo->tipo_servicio }}</td>
                <td>{{ $dispositivo->descripcion }}</td>
                <td>
                    <img src="{{ asset('storage/' . $dispositivo->foto1) }}" alt="Foto 1" width="100">
                </td>
                <td>
                    <img src="{{ asset('storage/' . $dispositivo->foto2) }}" alt="Foto 2" width="100">
                </td>
                <td>

                    <!-- Botón de Eliminar -->
                    <form action="{{ route('dispositivo.destroy', $dispositivo->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este dispositivo?');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botón para regresar a la página de bienvenida -->
    <a href="{{ url('/') }}" class="btn btn-secondary mt-4">Regresar al inicio</a>
</div>
@endsection
