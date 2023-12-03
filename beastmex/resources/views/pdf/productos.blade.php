<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
    <!-- Aquí puedes agregar tus estilos si los necesitas -->
</head>
<body>
    <h1>Lista de Productos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Costo</th>
                <th>Precio Venta</th>
                <th>Fecha Ingreso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->NombreProducto }}</td>
                    <td>{{ $producto->NombreMarca }}</td>
                    <td>{{ $producto->CostoProducto }}</td>
                    <td>{{ $producto->PrecioVenta }}</td>
                    <td>{{ $producto->FechaIngreso }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
