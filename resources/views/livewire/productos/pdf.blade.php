<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Productos</title>
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
    <h2>Reporte de Productos</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->precio }}</td>
                    <td>{{ $row->marca }}</td>
                    <td>{{ $row->cantidad }}</td>
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
