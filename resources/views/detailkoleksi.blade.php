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
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('galeri/css/themee.css') }}">
    <link href="css\style.css" rel="stylesheet">



</head>
<style>
    body {
        padding-top: 0;
    }

    /*** Heading ***/

    .navbar {
        background-color: #103741 !important;
    }

    /* Penyesuaian untuk layar lebih kecil */
    @media (max-width: 575.98px) {
        .navbar-brand {
            justify-content: space-between;
            /* Menyusun elemen secara sejajar */
        }

        .navbar-brand h1 {
            font-size: 1em;
            /* Ukuran font lebih kecil */
            margin-right: 0.5em;
            /* Jarak antara logo */
        }

        .navbar-logo {
            height: 1.8em;
            /* Ukuran logo lebih kecil */
        }

    }

    .card {
        height: 100%;
        /* Menentukan tinggi kartu agar semua kartu memiliki tinggi yang sama */
        display: flex;
        /* Menggunakan flexbox untuk mengatur tata letak */
        flex-direction: column;
        /* Menyusun konten kartu dalam satu kolom */
    }

    .card-img-top {
        height: 200px;
        /* Menentukan tinggi gambar agar semua gambar memiliki tinggi yang sama */
        object-fit: cover;
        /* Memastikan gambar diisi sepenuhnya ke dalam kotak */
    }

    .card-body {
        display: flex;
        /* Menggunakan flexbox untuk mengatur tata letak */
        flex-direction: column;
        /* Menyusun konten dalam satu kolom */
        flex-grow: 1;
        /* Memperluas isi kartu agar mengisi sisa ruang yang tersedia */
    }

    .card-title {
        font-size: 1.25rem;
        /* Ukuran judul kartu */
        margin-bottom: 0.5rem;
        /* Jarak antara judul dan deskripsi */
        white-space: nowrap;
        /* Mencegah teks berpindah baris */
        overflow: hidden;
        /* Memotong teks yang melampaui batas */
        text-overflow: ellipsis;
        /* Menampilkan ellipsis (...) untuk teks yang terpotong */
    }

    .card-text {
        flex-grow: 1;
        /* Memperluas teks deskripsi agar mengisi sisa ruang yang tersedia */
    }

    .btn-primary {
        margin-top: auto;
        /* Menempatkan tombol di bagian bawah kartu */
    }

    /* Tambahan CSS untuk memastikan responsif pada perangkat seluler */
    @media (max-width: 576px) {
        .card-img-top {
            height: 150px;
            /* Kurangi tinggi gambar untuk layar yang lebih kecil */
        }

        .card-title {
            font-size: 1rem;
            /* Kurangi ukuran judul untuk layar yang lebih kecil */
        }

        .card-text {
            font-size: 0.875rem;
            /* Kurangi ukuran teks untuk layar yang lebih kecil */
        }
    }
</style>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top px-4 px-lg-5 py-lg-0"
        style="background-color: #103741;">
        <a href="index.html" class="navbar-brand" style="display: flex; align-items: center;">
            <h1 class="m-0 text-white fw-bold">MUSEUM BRAWIJAYA</h1>
            <img src="{{ asset('gambar/image1.png') }}" alt="Logo" style="height: 2.5em; margin-left: 0.5em;" />
            <img src="{{ asset('gambar/image2.png') }}" alt="Logo" style="height: 2.5em; margin-left: 0.5em;" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="/" class="nav-item nav-link ">Beranda</a>
                <a href="/about" class="nav-item nav-link ">Tentang</a>
                <a href="/koleksi" class="nav-item nav-link active">Koleksi Pameran</a>
                <a href="/katalogbuku" class="nav-item nav-link">Katalog Buku</a>
                <a href="/surat" class="nav-item nav-link">Surat Observasi/Kunjungan</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <main role="main">
        <section class="bg-gray200 pt-5 pb-5">
            <div class="container">
                <div class="bg-light rounded shadow">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="{{ asset('storage/' . $koleksi['gambar']) }}" class="product-image"
                                alt="Product Image">
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">{{ $koleksi->nama_barang }}</div>
                                <div class="card-body">
                                    <p><strong>Tahun/Abad/Masa:</strong> {{ $koleksi->tahun_abad_masa }}</p>
                                    <p><strong>Cara Didapat:</strong> {{ $koleksi->cara_didapat }}</p>
                                    <p><strong>Deskripsi:</strong> {{ $koleksi->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-200 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>Koleksi Yang Hampir Sama</h5>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                            @foreach($similarCollections as $collection)
                            <div class="col mb-4">
                                <div class="card h-100 d-flex flex-column">
                                    <img src="{{ asset('storage/' . $collection->gambar) }}" class="card-img-top"
                                        alt="Collection Image">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $collection->nama_barang }}</h5>
                                        <p class="card-text flex-grow-1">{{ $collection->deskripsi }}</p>
                                        <div class="mt-auto">
                                            <a href="{{ route('detailkoleksi_landing', $collection->id) }}"
                                                class="btn btn-primary">Detail Koleksi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>
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