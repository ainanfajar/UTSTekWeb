<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">AKUN</li>
            <li class="nav-item menu-close">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                        Akun
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <div>
                            <a class="dropdown-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="far fa-circle nav-icon"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="nav-header">HOME</li>
            <li class="nav-item">
                <a href="/admin" class="nav-link">
                    <i class="nav-icon fa fa-home"></i>
                    <p>
                        Admin
                    </p>
                </a>
            </li>

            <li class="nav-header">DATA</li>
            <li class="nav-item">
                <a href="/guru" class="nav-link">
                    <i class="nav-icon fa fa-book-open"></i>
                    <p>
                        Guru
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/siswa" class="nav-link">
                    <i class="nav-icon fa fa-book-open"></i>
                    <p>
                        Siswa
                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->