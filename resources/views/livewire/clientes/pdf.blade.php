<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Clientes</title>
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
    <h2>Reporte de Clientes</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->direccion }}</td>
                    <td>{{ $row->telefono }}</td>
                    <td>{{ $row->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay datos disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
