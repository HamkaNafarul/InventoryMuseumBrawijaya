<meta name="viewport" content="width=device-width, initial-scale=1">

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      
        <ul class="navbar-nav ml-auto">
          
          <!-- More navbar items... -->
        </ul>
      </nav>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('dashboardd') }}" class="brand-link">
            <span class="brand-text font-weight-light">Admin Invenntory Museum</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('gambar/sejarah.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Nafarul Hamkah</a>
                    <a href="/logout" class="d-block">Logout</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('dashboardd') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('Admin') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('koleksipameran') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Koleksi Pameran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('koleksibuku') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Katalog Buku</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('suratmasuk') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Surat Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('suratpenuh') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Hari Penuh</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    
    
      