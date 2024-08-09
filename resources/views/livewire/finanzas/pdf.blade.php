<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Finanzas</title>
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
    <h2>Reporte de Finanzas</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tipo Transacción</th>
                <th>Descripción</th>
                <th>Monto</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse($finanzas as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->tipo_transaccion }}</td>
                    <td>{{ $row->descripcion }}</td>
                    <td>{{ $row->monto }}</td>
                    <td>{{ $row->fecha }}</td>
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
