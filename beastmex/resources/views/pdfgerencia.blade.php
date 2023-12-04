<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios - PDF</title>
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
    <h1>Listado de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Área de trabajo</th>
                <th>Nombre(s) empleado</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>E-mail</th>
                <th>Puesto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cons as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{optional($item)->AreaUsuario}}</td>
                    <td>{{ $item->NombreUsuario }}</td>
                    <td>{{ $item->ApellidoPaternoUsuario }}</td>
                    <td>{{ $item->ApellidoMaternoUser }}</td>
                    <td>{{ $item->emailUsuario }}</td>
                    <td>{{ $item->posicionUsuario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
