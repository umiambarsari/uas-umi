<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('template') }}" class="nav-link">Beranda</a>
      </li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
           <i class="fa fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="" class="dropdown-item" >
                <i class="fa fa-user"></i> Profile
              </a>
              <a href="{{ url('setting') }}" class="dropdown-item" >
                <i class="fa fa-cog"></i> Setting
              </a>
              <a href="{{ url('login') }}" class="dropdown-item" >
                <i class="fa fa-sign-out"></i> Log out
              </a>
            </div>
      </li>
  </ul>
</nav>