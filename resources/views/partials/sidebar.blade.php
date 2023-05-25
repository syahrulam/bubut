<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3">Admin Panel ReBeBu</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            <hr class="sidebar-divider">
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/produk') }}" aria-expanded="true">
                    <span>Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/jasa') }}" aria-expanded="true">
                    <span>Jasa</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pemesan') }}" aria-expanded="true">
                    <span>Daftar Pemesan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/reservasi') }}" aria-expanded="true">
                    <span>Daftar Reservasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/client') }}" aria-expanded="true">
                    <span>Client</span>
                </a>
            </li>
            <!-- Akun Admin -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/akun') }}" aria-expanded="true">
                    <span>Akun</span>
                </a>
            </li>
            <hr class="sidebar-divider">
        </ul>