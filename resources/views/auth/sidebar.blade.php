<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      
        <ul class="navbar-nav ml-auto">
          
          <!-- More navbar items... -->
        </ul>
      </nav>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="../../index3.html" class="brand-link">
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
              <li class="nav-item has-treeview">
                <a href="{{ route('dashboardd') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard<i class="right fas fa-angle-left"></i></p>
                </a>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('koleksipameran') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Koleksi Pameran<i class="right fas fa-angle-left"></i></p>
                    </a>
                        
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Katalog Buku<i class="right fas fa-angle-left"></i></p>
                    </a>
                    
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Surat Masuk<i class="right fas fa-angle-left"></i></p>
                      </a>
                      
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>Kelola Admin<i class="right fas fa-angle-left"></i></p>
                        </a>
              <!-- More sidebar items... -->
            </ul>
          </nav>
        </div>
      </aside>