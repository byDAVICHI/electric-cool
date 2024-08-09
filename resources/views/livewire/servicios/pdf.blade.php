<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Servicios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Reporte de Servicios</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Costo</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody>
            @forelse($servicios as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->descripcion }}</td>
                    <td>{{ $row->costo }}</td>
                    <td>{{ $row->fecha_inicio }}</td>
                    <td>{{ $row->fecha_fin }}</td>
                    <td>{{ $row->estatus }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No hay datos disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
