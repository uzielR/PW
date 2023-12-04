<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos en el Almacén</title>
    <style>
        /* Estilos CSS para el PDF */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Productos en el Almacén</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No. Serie</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Costo</th>
                <th>Cantidad</th>
                <!-- Agrega más encabezados si es necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->idProducto }}</td>
                    <td>{{ $producto->NombreProducto }}</td>
                    <td>{{ $producto->NombreMarca }}</td>
                    <td>{{ $producto->CostoProducto }}</td>
                    <td>{{ $producto->Cantidad }}</td>
                    <!-- Agrega más columnas si es necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
