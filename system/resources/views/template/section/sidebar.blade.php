@php
function check($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">
                    @if (Auth::check())
                        {{ request()->user()->nama }}
                    @elseif( Auth::guard('admin')->check())
                        <strong> {{ Auth::guard('admin')->user()->nama }}</strong>
                        As Admin
                    @elseif( Auth::guard('pengguna')->check())
                        <strong> {{ Auth::guard('pengguna')->user()->nama }}</strong>
                        As pengguna
                    @else
                        silakan login
                    @endif
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url("dashboard/{status}") }} " class="nav-link  {{ check('admin/dashboard') }}">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/produk') }}" class="nav-link {{ check('admin/produk') }}">
                        <i class="fas fa-archive nav-icon"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/user') }}" class="nav-link {{ check('admin/user') }}">
                        <i class="fas fa-user nav-icon"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link {{ check('home') }}">
                        <p>My Toko </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
