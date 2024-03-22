<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Museum Brawijaya Malang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/animejs"></script>
    <link href="{{ asset('asset/css/styles.css') }}" rel="stylesheet">
</head>
<body>

    @include('navbar')
   
<style>
    body {
    background-image: url('{{ asset('gambar/bg5.png') }}');
    background-size: cover; /* untuk mengisi area background */
    background-repeat: no-repeat; /* untuk menghindari pengulangan gambar */
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

</style>
    <div class="col-md-12" align="center">
        <h1 style="color: white;"><b></b></h1>
    </div>
 
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-90 wow zoomIn" style="width: auto; height: 280px;"data-wow-delay="0.1s" src="gambar/image1.png">
                    </div>                    
                    
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-90 wow zoomIn" style="width: auto; height: 280px;" data-wow-delay="0.1s" src="gambar/image2.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            <div style="color: white;">
                <h1 class="mb-4">Inventory <i class="fa fa-utensils text-primary me-2"></i>Museum Brawijaya</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-sm-6">
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                        <h1 class="flex-shrink-0 display-5 text-white mb-0" data-toggle="counter-up">15</h1>
                        <div class="ps-4">
                            <p class="mb-0 text-white">Jumlah</p>
                            <h6 class="text-uppercase mb-0 text-white">Koleksi Pameran</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                        <h1 class="flex-shrink-0 display-5 text-white mb-0" data-toggle="counter-up">50</h1>
                        <div class="ps-4">
                            <p class="mb-0 text-white">Jumlah</p>
                            <h6 class="text-uppercase mb-0 text-white">Katalog Buku</h6>
                        </div>
                    </div>
                </div>
            </div>            
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Jelajahi</a>
            </div>
        </div>
    </div>
</div>

  @include('footer1')
  <script>
    // Animasi untuk gambar
    anime({
        targets: '.wow',
        translateY: [-50, 0],
        opacity: [0, 1],
        duration: 1000,
        easing: 'easeOutExpo',
        delay: anime.stagger(100),
    });

    // Animasi untuk teks dan tombol
    anime({
        targets: '.fade-in',
        translateY: [50, 0],
        opacity: [0, 1],
        duration: 1000,
        easing: 'easeOutExpo',
        delay: anime.stagger(100),
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>



