<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li> -->
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fa fa-user-circle"></i> {{auth()->user()->name}} <span class="fa fa-angle-down"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <label class="dropdown-item"><strong>Super Admin</strong></label>
        <div class="dropdown-divider"></div>
        <a href="{{URL::to('/profil-user')}}" class="dropdown-item">
          Profile
        </a>
        <div class="dropdown-divider"></div>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
      </div>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li> -->
  </ul>
</nav>
<!-- /.navbar -->


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img class="brand-image img-circle elevation-3" src="{{asset('dist/img/apotek.jpg') }}"  alt="Aplikasi Apotek">
    <span class="brand-text font-weight-light"> Apotek</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <div class="info">
        <small><a href="#" class="d-block">MAIN MENU</a></small>
      </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{URL::to('/beranda')}}" class="nav-link {{ Request::is('beranda') ? 'active' : ''}}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/data-obat')}}" class="nav-link {{ Request::is('data-obat') ? 'active' : ''}}">
            <i class="nav-icon fa fa-book"></i>
            <p>
              Data Obat
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/data-obat-masuk')}}" class="nav-link {{ Request::is('data-obat-masuk') ? 'active' : ''}}">
            <i class="nav-icon fa fa-folder"></i>
            <p>
              Data Obat Masuk
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/laporan')}}" class="nav-link {{ Request::is('laporan') ? 'active' : ''}}">
            <i class="nav-icon fa fa-file"></i>
            <p>
              Laporan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/manajemen-user')}}" class="nav-link {{ Request::is('manajemen-user') ? 'active' : ''}}">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Manajemen User
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
