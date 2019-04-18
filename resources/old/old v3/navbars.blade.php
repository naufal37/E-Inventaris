<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                </ul>
            </form>

            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        @if(Auth::check())
                        <div class="d-sm-none d-lg-inline-block">{{Auth::User()->name}}</div></a>
                    @endif
                        <div class="d-sm-none d-lg-inline-block"></div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="features-profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="features-activities.html" class="dropdown-item has-icon">
                            <i class="fas fa-bolt"></i> Activities
                        </a>
                        <a href="features-settings.html" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">E-Inventaris</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">EV</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard Admin</span></a></li>

            <!--            Data Header-->
            <li class="menu-header">Welcome</li>
            <li class=active><a class="nav-link" href="blank.html"><i class="fas fa-home"></i> <span>Welcome</span></a></li>
            <!--            Data Header END-->

            <!--            Data -->
            <li class="menu-header">Stok Barang</li>
            <li class="dropdown">

                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cube"></i> <span>Barang</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Data Barang</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-door-open"></i> <span>Ruangan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Data Ruangan</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Jenis</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Data Jenis</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ruler-combined"></i> <span>Satuan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Data Satuan</a></li>
                </ul>
            </li>
            <!--            End Data-->
            <li class="menu-header">Peminjaman/Pengembalian</li>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-file-export"></i> <span>Pinjam Barang</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-file-import"></i> <span>Pengembalian Barang</span></a></li>

            <li class="menu-header">Lain Lain</li>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-user"></i> <span>User</span></a></li>
        </ul>
    </aside>
</div>