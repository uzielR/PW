<table class="table table-striped">
    <thead>
        <tr class="text-center border-2 p-4">
            <th>No.Serie</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Costo</th>
            <th>Precio Venta</th>
            <th>Fecha Ingreso</th>
            <th>Foto</th>
            <th> </th>

        </tr>
    </thead>
    @foreach ($productos as $item)
        <tbody>
            <tr class="text-center p-4 py-2">
                <th scope="row">{{$item->idProducto }}</th>
                <td>{{$item->NombreProducto }}</td>
                <td>{{$item->NombreMarca }}</td>
                <td>{{$item->CostoProducto }}</td>
                <td>{{$item->FechaIngreso }}</td>
                <td>{{$item->PrecioVenta }}</td>
                {{-- <td>{{$item->ImagenProducto }}</td> --}}
                
            </tr>
            
            @endforeach
        </tbody>
    
</table>
