
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="/Supplier">
                <span class="fa fa-edit"></span>
                Provedores
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/product">
                <span class="fas fa-cart-plus" ></span>
                Productos
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Category">
                    <span class="fas fa-clipboard-list"></span>
                         Categoria </a>

            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Stock">
                <span class="fas fa-layer-group"></span>
               Almacén
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Warehouse">
                <span class="fas fa-warehouse"></span>
                 Almacén  Deposito
                 
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Sub_Stock">
                <span class="fas fa-archive"></span>
                Sub Almacén
            </a>
            </li>
        </ul>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="/Input">
            <span class="fas fa-briefcase"></span>
            Entradas
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/Output">
            <span class="fab fa-fly"></span>
            Salidas
        </a>
        </li>
     
        <li class="nav-item">
        <a class="nav-link" href="/Transaction">
            <span class="fas fa-wallet"></span>
            Transacion
        </a>
        </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield("body")
    </main>
  </div>
</div>