<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script type="text/javascript">
        (function () {
            var css = document.createElement('link');
            css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>

    <!-- Favicon -->

     <!-- Google Web Fonts -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../lib/owlcarousel/assets/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('../../css/bootstrap.min.css') }}" >
    
    <link rel="stylesheet" href="{{ asset('galeri/css/themee.css') }}">
    <link href="css\style.css" rel="stylesheet">
    

    
</head>
<style>
    body{
        padding-top: 0;
    }
    /*** Heading ***/
p{
    font-family: "Open Sans", sans-serif;
}
</style>

<body>
    <!-- Spinner End -->
 <!-- Navbar Start -->
 <nav  class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand" style="display: flex; align-items: center;">
        <h1 class="m-0 text-dark fw-bold">MUSEUM BRAWIJAYA</h1>
        <img src="{{ asset('gambar/image1.png') }}" alt="Logo" style="height: 2.5em; margin-left: 0.5em;" />
        <img src="{{ asset('gambar/image2.png') }}" alt="Logo" style="height: 2.5em; margin-left: 0.5em;" />        
    </a>
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-auto">
        <a href="/" class="nav-item nav-link ">Home</a>
        <a href="/about" class="nav-item nav-link active">Tentang</a>
        <a href="/koleksi" class="nav-item nav-link">Koleksi Pameran</a>
        <a href="/katalogbuku" class="nav-item nav-link ">Katalog Buku</a>
        <a href="/surat" class="nav-item nav-link">Surat Observasi/Kunjungan</a>
    </div>
  </div>
  </nav>
    <!-- Navbar End -->

    <!-- About -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Inventaris Museum Brawijaya Malang</h1>
                    <p class="mb-4">
                        Sebagai pimpinan Museum Brawijaya, saya dengan bangga mempersembahkan kepada Anda semua portal online ini yang merupakan wujud dari komitmen kami untuk memperluas aksesibilitas dan meningkatkan pelayanan kepada masyarakat serta para pecinta sejarah.
                        Melalui website ini, Anda akan dapat menjelajahi inventaris koleksi yang berharga dan beragam yang dimiliki oleh Museum Brawijaya. Koleksi ini tidak hanya menjadi saksi bisu dari sejarah perjuangan bangsa, tetapi juga sebagai warisan berharga yang perlu dilestarikan dan dipelajari untuk generasi-generasi mendatang.
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="gambar/museum.png" alt="" style="width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">Jhon</h6>
                                    <small>Kabintal Jarahdam</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-1" src="gambar/museum_satu.png" alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-1" src="gambar/museum_dua.jpg" alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-1" src="gambar/museum_tiga.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->

    
        <!-- Map -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.282492700974!2d112.61851467213259!3d-7.97992008792311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f965df8b86f1%3A0xe058fc6e0cbb2ef4!2sMuseum%20Brawijaya%20Malang!5e0!3m2!1sen!2sid!4v1645881697971!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Lokasi Museum Brawijaya Malang</h1>
                                <p class="mb-4">Temukan lokasi Museum Brawijaya Malang di peta Google Maps untuk memudahkan perjalanan Anda ke museum kami.</p>
                                <a class="btn btn-primary py-3 px-5" href="https://maps.app.goo.gl/MWd5cdD6RRceLT6c7" target="_blank">Lihat Lokasi di Google Maps<i class="fa fa-map-marker ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- Map -->

 <!-- Tutorial surat -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded p-5">
            <h2 class="text-center mb-4">Tutorial Mengirim Surat Observasi/Kunjungan</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="mb-3">
                        <img src="gambar\langkah_satu.JPG" alt="Step 1" class="img-fluid">
                    </div>
                    <h3>Langkah 1</h3>
                    <p>Pilih tanggal yang tersedia dan sesuai dengan rencana tanggal observasi/kunjungan anda</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="mb-3">
                        <img src="gambar\langkah_dua.JPG" alt="Step 2" class="img-fluid">
                    </div>
                    <h3>Langkah 2</h3>
                    <p>Isikan form pengiriman surat dengan lengkap dan kirim surat dengan format pdf</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="mb-3">
                        <img src="gambar\langkah_tiga.JPG" alt="Step 3" class="img-fluid">
                    </div>
                    <h3>Langkah 3</h3>
                    <p>Cek status di bagian atas apakah form yang anda kirim sudah diterima</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="surat" class="btn btn-primary py-3 px-5">Kirim Surat Observasi/Kunjungan</a>
            </div>
        </div>
    </div>
</div>

  <!-- Tutorial surat -->


    @include('footer')
    

    <!-- Back to Top -->
   

    <!-- JavaScript Libraries -->
    <script src="{{ asset('galeri/js/app.js') }}"></script>
    <script src="{{ asset('galeri/js/theme.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>    
</body>

</html>