  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('Inicio')}}" class="brand-link">
      <i class="fas fa-book"></i>
      <span class="brand-text font-weight-light">Libreria</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(auth()->user()->foto=="")
            <img src="{{url('storage/default.png')}}" class="img-circle elevation-2" alt="User Image">
          @else
            <img src="{{url('storage/'.auth()->user()->foto)}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="{{url('MiPerfil')}}" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('Inicio')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('Usuarios')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('Clientes')}}" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
                <p>
                  Sobre libros
                  <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('Generos') }}" class="nav-link">
                  <i class="fas fa-address-book nav-icon"></i>
                  <p>Géneros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('Autores') }}" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>Autores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('Libros') }}" class="nav-link">
                  <i class="fas fa-book-open nav-icon"></i>
                  <p>Libros</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
                <p>
                  Ventas
                  <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('CrearVentas') }}" class="nav-link">
                  <i class="fas fa-calculator nav-icon"></i>
                  <p>Crear ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('VerVentas') }}" class="nav-link">
                  <i class="fas fa-coins nav-icon"></i>
                  <p>Ver ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('Pedidos') }}" class="nav-link">
                  <i class="fas fa-cubes nav-icon"></i>
                  <p>Pedidos</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
