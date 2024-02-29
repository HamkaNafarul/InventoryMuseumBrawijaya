<header class="header" style="">
    <h4 style="color: white;">MUSEUM BRAWIJAYA MALANG</h4>
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Isi navbar Anda -->
      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('home') }}">BERANDA</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('koleksi') }}">KOLEKSI PAMERAN</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('katalogbuku') }}">KATALOG BUKU PERPUSTAKAAN</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <a href="{{ route('surat') }}" class="btn">Surat Observasi/Kunjungan</a>
<style>
    .btn {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s; /* Transisi perubahan warna */
    }

    .btn:hover {
        background-color: purple;
        color: white;
    }
</style>

</header>


  