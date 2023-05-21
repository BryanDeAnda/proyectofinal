<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Pivote</title>
</head>
<body>
    <h1>Tabla Pivote</h1>

    <!-- Tabla para mostrar los datos de la tabla pivote -->
    <table>
        <thead>
            <tr>
                <th>Tienda</th>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($storeStocks as $storeStock)
                <tr>
                    <td>{{ $storeStock->store->nombre }}</td>
                    <td>{{ $storeStock->stock->nombre }}</td>
                    <td>{{ $storeStock->cantidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
