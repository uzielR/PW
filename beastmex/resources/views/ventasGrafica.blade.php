@extends('layouts.plantilla')
@section('titulo','proveedoresEditar')
@section('ventasGrafica')


<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

    <h1 class="display-1 text-center">Ventas</h1>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <div class="card container p-1">
          <div class="card-body container p-4">
            <table class="table table-striped">
              <h1 class="display-6 text-center"> TICKET VENTAS</h1>
              <thead>
                <tr class="text-center border-1">
                  <th>Fecha</th>
                  <th>Nombre Cliente</th>
                  <th>Apellido Materno</th>
                  <th>Apellido Paterno</th>
                  <th>Nombre producto</th>
                  <th>Marca</th>
                  <th>Cantidad</th>
                  <th>Precio producto</th>
                  <th>Total</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center p-4">
                  <td>02/11/2023</td>
                  <td>Juan</td>
                  <td>Resendiz</td>
                  <td>Alvarez</td>
                  <td>Disco Duro </td>
                  <td>Lenovo</td>
                  <td>2</td>
                  <td>$750.00</td>
                  <td>1500</td>
                  <td>
                    <a href="#" class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true"><svg
                      xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                      <path
                        d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z" />
                      <path
                        d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z" />
                    </svg> Generar Ticket</a>
                  </td>
  
                </tr>
                <tr class="text-center p-4">
                  <th>03/11/2023</th>
                  <td>Jesica</td>
                  <td>Resendiz</td>
                  <td>Perez</td>
                  <td> Cable USB</td>
                  <td>Motorola</td>
                  <td>1</td>
                  <td>$250.00</td>
                  <td>250</td>
                  <td>
                    <a href="#" class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true"><svg
                      xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                      <path
                        d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z" />
                      <path
                        d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z" />
                    </svg> Generar Ticket</a>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="d-grid p-1 gap-5">
              <a href="/ventaStock" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                <i class="bi bi-receipt"></i>
                Crear nueva venta</a>
            </div>
        </div>
        </div>
        <h1 class="display-1 text-center p-4"> Graficas </h1>
        <svg width="400" height="250" id="grafico"></svg>

        <script>
          // Datos para el gráfico
          const datos = [
            { mes: 'Enero', ventas: 12 },
            { mes: 'Febrero', ventas: 19 },
            { mes: 'Marzo', ventas: 3 },
            { mes: 'Abril', ventas: 5 },
            { mes: 'Mayo', ventas: 2 }
          ];

          const svg = document.getElementById('grafico');

          // Definir dimensiones y escalas
          const width = 400;
          const height = 200;
          const barWidth = width / datos.length;
          const maxValue = Math.max(...datos.map(d => d.ventas));
          const scaleY = height / maxValue;

          // Dibujar barras
          datos.forEach((dato, index) => {
            const barHeight = dato.ventas * scaleY;
            const x = index * barWidth;
            const y = height - barHeight;

            const rect = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
            rect.setAttribute('x', x);
            rect.setAttribute('y', y);
            rect.setAttribute('width', barWidth - 2); // Espacio entre barras
            rect.setAttribute('height', barHeight);
            rect.setAttribute('fill', 'blue'); // Color de las barras

            svg.appendChild(rect);

            // Etiquetas en el eje X
            const label = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            label.setAttribute('x', x + barWidth / 2);
            label.setAttribute('y', height + 15);
            label.setAttribute('text-anchor', 'middle');
            label.textContent = dato.mes;

            svg.appendChild(label);
          });
        </script>
      </div>



@endsection