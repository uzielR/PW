<!-- resources/views/pdf/ventas.blade.php -->

<table>
    <thead>
        <tr>
            <th>Nombre Cliente</th>
            <th>Apellido Materno</th>
            <th>Apellido Paterno</th>
            <th>Nombre producto</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Precio producto</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cons as $item)
            <tr>
                <!-- Agrega las columnas necesarias según la estructura de tu consulta -->
                <td>{{ $item->NombreCliente }}</td>
                <td>{{ $item->ApellidoMaterno }}</td>
                <td>{{ $item->ApellidoPaterno }}</td>
                <td>{{ $item->NombreProducto }}</td>
                <td>{{ $item->Marca5 }}</td>
                <td>{{ $item->Cantidad5 }}</td>
                <td>{{ $item->Precio5 }}</td>
                <td>{{ $item->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
