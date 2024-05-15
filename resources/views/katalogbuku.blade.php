<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>

       <!-- Favicon -->

   <!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="css\bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="galeri\css\app.css">
    <link href="css\style.css" rel="stylesheet">
</head>
<style>
  .search-box {
  display: flex;
  align-items: center;
  border-radius: 5px;
  padding: 5px;
  overflow: hidden;
  width: 90%;
  max-width: 850px;
  height: 70px; /* Atur tinggi sesuai kebutuhan */
}

.search-input {
  flex: 1; /* Membuat input memanjang sejauh mungkin */
  border: none;
  outline: none;
  padding: 5px;
  font-size: 16px;
  border-radius: 0;
}

.search-button {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 0;
  transition: background-color 0.3s;
}


/* Media query untuk layar dengan lebar kurang dari 600px */
@media (max-width: 600px) {
  .search-input {
    font-size: 14px; /* Mengurangi ukuran font untuk layar kecil */
  }
}
.search-button:hover {
  background-color: #0056b3;
}

.navbar {
    background-color: #103741 !important;
}


</style>
<body>
   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top px-4 px-lg-5 py-lg-0" style="background-color: #103741;">
    <a href="index.html" class="navbar-brand" style="display: flex; align-items: center;">
        <h1 class="m-0 text-white fw-bold">MUSEUM BRAWIJAYA</h1>
        <img src="gambar\image1.png" alt="Logo" style="height: 2.5em; margin-left: 0.5em;" />
        <img src="gambar\image2.png" alt="Logo" style="height: 2.5em; margin-left: 0.5em;" />
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="/" class="nav-item nav-link ">Beranda</a>
            <a href="/about" class="nav-item nav-link">Tentang</a>
            <a href="koleksi" class="nav-item nav-link">Koleksi Pameran</a>
            <a href="katalogbuku" class="nav-item nav-link active">Katalog Buku</a>
            <a href="surat" class="nav-item nav-link">Surat Observasi/Kunjungan</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
  

        <main role="main">
          <section class="mt-4 mb-5">
            <div class="col-md-12" align="center">
              <h1 style="color: black;">KATALOG BUKU</h1>
          </div><br>
        <div align="center" class="col-lg-12" style="padding-left:20px;padding-right: 20px;min-height: 471px;">
          <div class="search-box">
            <form action="#" method="GET" class="mb-4" style="display: flex; align-items: center; width: 100%;">
              <input type="text" name="query" class="form-control search-input" placeholder="Cari,Nama,Tahun...." style="flex: 1;">
              <button type="submit" class="btn btn-primary search-button">Cari</button>
            </form>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="card-columns">
                @foreach($koleksibuku as $buku)
                <div class="card card-pin">
                  <img class="card-img" src="{{ asset('storage/' . $buku->sampul) }}" alt="Card image">
                  <div class="overlay">
                        <h2 class="card-title title">{{ $buku->judul }}</h2>
                        {{-- <p>{{ $buku->pengarang }}</p> --}}
                        <div class="more">
                          <a href="{{ route('detailkoleksibuku_landing', $buku->id) }}">
                              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                          </a>
                      </div>                      
                    </div>
                </div>
                @endforeach
            </div>            

              </div>
            </div>
          </div>
        </div>
        

          </section>
              
          </main>
 
        <!-- Classes End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('footer1');

    <!-- JavaScript Libraries -->
    <script src="galeri\js\app.js"></script>
    <script src="galeri\js\theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>