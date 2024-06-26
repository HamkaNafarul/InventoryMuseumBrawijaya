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
    body {
        padding-top: 0;
    }
    .about-img img {
    width: 100%; /* Pastikan gambar menggunakan lebar penuh dari container */
}

@media (max-width: 992px) {
    .about-img .text-start, .about-img .text-end {
        margin-top: -150px;
    }
}

@media (min-width: 992px) {
    .about-img {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .about-img .col-12 {
        margin-bottom: 30px; /* Tambahkan jarak antara gambar atas dan bawah */
    }
}


    p {
        font-family: "Open Sans", sans-serif;
    }

    .navbar {
        background-color: #103741 !important;
    }

    @media (max-width: 575.98px) {
        .navbar-brand {
            justify-content: space-between;
        }

        .navbar-brand h1 {
            font-size: 1em;
            margin-right: 0.5em;
        }

        .navbar-logo {
            height: 1.8em;
        }
    }

    @media (max-width: 576px) {
        #tutorial h1 {
            font-size: 1.5rem;
        }

        #tutorial h5 {
            font-size: 1.25rem;
        }

        #tutorial p {
            font-size: 1rem;
        }

        #tutorial .btn {
            padding: 0.75rem 1rem;
            font-size: 0.875rem;
        }

        .d-flex {
            flex-direction: column;
            gap: 10px;
        }

        #tutorialImg {
            width: 100%;
        }
    }

    .navbar-toggler {
        border-color: white;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
</style>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top px-4 px-lg-5 py-lg-0"
        style="background-color: #103741;">
        <a href="index.html" class="navbar-brand" style="display: flex; align-items: center;">
            <h1 class="m-0 text-white fw-bold">MUSEUM BRAWIJAYA</h1>
            <img src="gambar\image1.png" alt="Logo" style="height: 2.5em; margin-left: 0.5em;" />
            <img src="gambar\image2.png" alt="Logo" style="height: 2.5em; margin-left: 0.5em;" />
        </a>
        <button type="button" class="navbar-toggler" style="color: white;" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon" style="color: white;"></span>
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

    <!-- About -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Inventaris Museum Brawijaya Malang</h1>
                    <p class="mb-4">
                        Puji syukur kita panjatkan kepada Tuhan Yang Maha Esa pembinaan mental dan sejarah 
                        Kodam V/Brawijaya telah berhasil melaksanakan pembimbingan penelitian menyelesaikan tugas belajar skripsi dengan judul "PENGEMBANGAN SISTEM INFORMASI 
                        INVENTORY DATA PAMERAN KOLEKSI DAN BUKU PERPUSTAKAAN DI MUSEUM BRAWIJAYA MALANG" Merupakan suatu penghargaan 
                        penelitian membantu tugas pokok kesejarahan mewariskan nilai-nilai patriotisme 
                        perjuangan cinta tanah air rela berkorban demi bangsa dan Negara Kesatuan Republik Indonesia kepada generasi TNI khususnya dan seluruh generasi penerus bangsa Indonesia pada umumnya.
                        <br>Museum Brawijaya Bintaljarahdam V/Brawijaya merupakan tempat pembinaan Dokumen, Penulisan, 
                        Perpustakaan, Museum, Monumen, dan Tradisi Kodam V/Brawijaya.<br> Sebagai wadah pembinaan sejarah Kodam V/Brawijaya memiliki literasi arsip/dokumen statis dan 
                        dinamis serta artefak saksi sejarah perjuangan di wilayah Kodam V/Brawijaya yang wilayahnya meliputi seluruh Jawa Timur. 
                        Penelitian ini semoga menjadi kajian akademis kesejarahan bagi generasi penerus bangsa.
                        <br>Demikian saya ucapkan selamat dan ucapan terima kasih atas keberhasilan penelitian ini
                        semoga Tuhan Yang Maha Esa senantiasa memberikan petunjuk dan bimbingan kepada kita semua demi Bangsa dan Negara Kesatuan 
                        Republik Indonesia.
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="gambar/museum.png" alt=""
                                        style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        {{-- <h6 class="text-primary mb-1">Jhon</h6> --}}
                                        <small>Kabintal Jarahdam</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex flex-column align-items-center">
                        <div class="col-12 text-center mb-4">
                            <img class="img-fluid rounded-circle bg-light p-1" src="gambar/1589275636662-4b355cb85ebd3980d3206ab7a604231c.jpeg" alt="">
                        </div>
                        <div class="d-flex w-100 justify-content-between">
                            <div class="text-start" style="width: 48%;">
                                <img class="img-fluid rounded-circle bg-light p-1" src="gambar/1692086137291-IMG_20230815_100555.jpg" alt="">
                            </div>
                            <div class="text-end" style="width: 48%;">
                                <img class="img-fluid rounded-circle bg-light p-1" src="gambar/museum_tiga.png" alt="">
                            </div>
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
            <div class="bg-light rounded shadow">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.282492700974!2d112.61851467213259!3d-7.97992008792311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f965df8b86f1%3A0xe058fc6e0cbb2ef4!2sMuseum%20Brawijaya%20Malang!5e0!3m2!1sen!2sid!4v1645881697971!5m2!1sen!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Lokasi Museum Brawijaya Malang</h1>
                            <p class="mb-4">Temukan lokasi Museum Brawijaya Malang di peta Google Maps untuk memudahkan
                                perjalanan Anda ke museum kami.</p>
                            <a class="btn btn-primary py-3 px-5" href="https://maps.app.goo.gl/MWd5cdD6RRceLT6c7"
                                target="_blank">Lihat Lokasi di Google Maps<i class="fa fa-map-marker ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map -->

    <!-- Tutorial surat -->
    <div class="container-xxl py-5" id="tutorial">
        <div class="container">
            <div class="bg-light rounded shadow">
                <h1 class="text-center mb-4">Tutorial Mengirim Surat</h1>
                <div class="bg-light rounded shadow">
                    <div id="tutorial" class="text-center p-3">
                        <div class="d-flex justify-content-between mt-4">
                            <button id="prevBtn" class="btn btn-primary py-3 px-5"
                                onclick="prevTutorial()">Previous</button>
                            <button id="nextBtn" class="btn btn-primary py-3 px-5"
                                onclick="nextTutorial()">Next</button>
                        </div>
                        <h5 id="tutorialTitle" class="mt-3">LANGKAH 1</h5>
                        <p id="tutorialDesc" class="mt-2">
                            Mohon untuk memilih tanggal yang tersedia yang sesuai dengan rencana tanggal observasi atau
                            kunjungan Anda. Pastikan untuk memilih tanggal yang memungkinkan Anda hadir sesuai jadwal
                            yang telah Anda atur.
                        </p>
                        <img id="tutorialImg" src="gambar/langkah_satu.JPG" alt="Step 1" class="img-fluid mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tutorial surat -->



    @include('footer')


    <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
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
    <script>
        let currentStep = 1;

        function showTutorial(step) {
            let imgSrc, title, desc;
            switch (step) {
                case 1:
                    imgSrc = "gambar\\langkah_satu.JPG";
                    title = "LANGKAH 1";
                    desc =
                        "Mohon untuk memilih tanggal yang tersedia yang sesuai dengan rencana tanggal observasi atau kunjungan Anda. Pastikan untuk memilih tanggal yang memungkinkan Anda hadir sesuai jadwal yang telah Anda atur.";
                    break;
                case 2:
                    imgSrc = "gambar\\langkah_dua.JPG";
                    title = "LANGKAH 2";
                    desc = "Isikan form pengiriman surat dengan lengkap dan kirim surat dengan format pdf";
                    break;
                case 3:
                    imgSrc = "gambar\\langkah_tiga.JPG";
                    title = "LANGKAH 3";
                    desc = "Cek status di bagian atas apakah form yang anda kirim sudah diterima";
                    break;
                default:
                    break;
            }
            document.getElementById("tutorialImg").src = imgSrc;
            document.getElementById("tutorialTitle").innerText = title;
            document.getElementById("tutorialDesc").innerText = desc;
        }


        function nextTutorial() {
            if (currentStep < 3) {
                currentStep++;
                showTutorial(currentStep);
            }
            updateButtonState();
        }

        function prevTutorial() {
            if (currentStep > 1) {
                currentStep--;
                showTutorial(currentStep);
            }
            updateButtonState();
        }

        function updateButtonState() {
            document.getElementById("prevBtn").disabled = (currentStep === 1);
            document.getElementById("nextBtn").disabled = (currentStep === 3);
        }

        showTutorial(currentStep);
    </script>
</body>

</html>