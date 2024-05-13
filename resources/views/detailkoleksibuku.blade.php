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
        <a href="/koleksi" class="nav-item nav-link ">Koleksi Pameran</a>
        <a href="/katalogbuku" class="nav-item nav-link active">Katalog Buku</a>
        <a href="/surat" class="nav-item nav-link">Surat Observasi/Kunjungan</a>
    </div>
  </div>
  </nav>
    <!-- Navbar End -->

    <main role="main">
        <section class="bg-gray200 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('storage/' . $koleksibuku['sampul']) }}" class="product-image img-fluid rounded" style="height: 550px;" alt="Product Image">
                    </div>                    
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">{{ $koleksibuku->judul }}</div>
                            <div class="card-body">
                                <p><strong>nomor:</strong> {{ $koleksibuku->nomor }}</p>
                                <p><strong>pengarang:</strong> {{ $koleksibuku->pengarang }}</p>
                                <p><strong>edisi:</strong> {{ $koleksibuku->edisi }}</p>
								<p><strong>tahun_terbit:</strong> {{ $koleksibuku->tahun_terbit }}</p>
                                <p><strong>issn:</strong> {{ $koleksibuku->issn }}</p>
                                <p><strong>penerbit:</strong> {{ $koleksibuku->penerbit }}</p>
                                <p><strong>tempat_terbit:</strong> {{ $koleksibuku->tempat_terbit }}</p>
                                <p><strong>kualifikasi:</strong> {{ $koleksibuku->kualifikasi }}</p>
                                <p><strong>bahasa:</strong> {{ $koleksibuku->bahasa }}</p>
                                <p><strong>abstrak:</strong> {{ $koleksibuku->abstrak }}</p>
                                <p><strong>subjek:</strong> {{ $koleksibuku->subjek }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="bg-gray200 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>More Like This</h5>
                        <div class="row">
                            @foreach($similarCollections as $collection)
                                <div class="col">
                                    <div class="card shadow" style =" max-width: 210px;">
                                        <img style =" max-width: 210px; height:250px;" src="{{ asset('storage/' . $collection->sampul) }}" class="card-img-top" alt="Collection Image">
                                        <div class="card-body"style ="height:180px;">
                                            <h5 class="card-title">{{ $collection->judul }}</h5>
                                            <p class="card-text">{{ $collection->bahasa }}</p>
                                            <a href="{{ route('detailkoleksibuku_landing', $collection->id) }}" class="btn btn-primary">Detail Koleksi</a>
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