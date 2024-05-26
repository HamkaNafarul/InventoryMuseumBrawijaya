<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="css\bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css\style.css" rel="stylesheet">
</head>
<style>


/* Penyesuaian untuk layar lebih kecil */
@media (max-width: 575.98px) {
    .navbar-brand {
        justify-content: space-between; /* Menyusun elemen secara sejajar */
    }
    .navbar-brand h1 {
        font-size: 1em; /* Ukuran font lebih kecil */
        margin-right: 0.5em; /* Jarak antara logo */
    }
    .navbar-logo {
        height: 1.8em; /* Ukuran logo lebih kecil */
    }
   
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
            <a href="/about" class="nav-item nav-link active">Tentang</a>
            <a href="koleksi" class="nav-item nav-link">Koleksi Pameran</a>
            <a href="katalogbuku" class="nav-item nav-link">Katalog Buku</a>
            <a href="surat" class="nav-item nav-link">Surat Observasi/Kunjungan</a>
        </div>
    </div>
</nav>




  <!-- Navbar End -->
    

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="gambar\bbg.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Inventaris Koleksi Buku</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Jelajahi katalog buku perpustakaan dengan fitur "Jelajahi Katalog Buku"! Temukan beragam pengetahuan, cerita, dan petualangan yang menanti Anda di setiap halaman. Dari buku-buku klasik hingga terbitan terbaru, Anda dapat dengan mudah menelusuri judul, penulis, dan kategori yang menarik minat Anda</p>
                                    <a href="/katalogbuku" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Jelajahi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="gambar\bgg.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Inventaris Koleksi Pameran</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Jelajahi koleksi pameran yang memukau dengan fitur "Jelajahi Inventaris Koleksi Pameran"! Nikmati pengalaman virtual yang mendalam dengan kemampuan untuk melihat detail setiap item, mulai dari deskripsi hingga gambar</p>
                                    <a href="koleksi" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Jelajahi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

      <!-- Tampilan untuk koleksi -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Koleksi Terbaru</h1>
                <p>Mari jelajahi koleksi terbaru di Museum Brawijaya Malang! Temuan ini menambah kekayaan dan keunikan museum kami. Nikmati keindahan dan cerita di balik setiap benda yang ditambahkan ke perpustakaan sejarah kami. Jangan lewatkan kesempatan untuk mengeksplorasi yang terbaru dari warisan budaya kita.</p>
            </div>
            <div class="row g-4">
                @foreach($latestKoleksi as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card shadow card-sm">
                        <img class="card-img-top rounded w-100 mx-auto mt-3" src="{{ asset('storage/' . $item->gambar) }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $item->nama_barang }}</h5>
                            <p class="card-text">{{ $item->tahun_abad_masa }}</p>
                            <p class="card-text">{{ $item->cara_didapat }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>    
    

<!-- Tampilan untuk katalog buku -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Katalog Buku Terbaru</h1>
            <p>Mari jelajahi koleksi terbaru di Museum Brawijaya Malang! Temuan ini menambah kekayaan museum kami. Nikmati keindahan dan cerita di balik setiap benda yang ditambahkan ke perpustakaan sejarah kami. Jangan lewatkan kesempatan untuk mengeksplorasi yang terbaru dari warisan budaya kita.</p>
        </div>
        <div class="row g-4">
            @foreach($latestkoleksibuku as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow">
                    <div class="row g-0">
                        <div class="col-4">
                            <img class="img-fluid rounded-start" src="{{ asset('storage/' . $item->sampul) }}" alt="" style="height: 200px;">
                        </div>
                        <div class="col-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->pengarang }}</p>
                                <p class="card-text">{{ $item->tahun_terbit }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            @endforeach
        </div>
    </div>
</div>








        @include('footer1')


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
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



