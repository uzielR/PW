<nav class="navbar navbar-expand-lg navbar-dark">

    <head class="navigation-bar">
        <div class="logo-container">
            <img class="Logo" src="css/imagenes/logo.ico" >
        </div>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/catalogoProductos">CATALOGO</a>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="/almacen">ALMACEN RECIBO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('almacen2.create')?'text-primary':''}}" href="/almacen2">REGISTRO PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/compras">COMPRAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/proveedores">PROVEEDORES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ventas">VENTAS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/gerenciaVistaUsuarios">GERENCIA</a>
                </li>


            </ul>
        </div>
    </head>
</nav>
