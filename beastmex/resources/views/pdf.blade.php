    <!-- resources/views/pdf/ventas.blade.php -->
    <title>Lista de Ventas</title>
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
                    <td>{{optional($item)->Total}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
