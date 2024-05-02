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
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('galeri/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('galeri/css/theme.css') }}">
    
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
        height: 70px;
        /* Atur tinggi sesuai kebutuhan */
    }

    .search-input {
        flex: 1;
        /* Membuat input memanjang sejauh mungkin */
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
            font-size: 14px;
            /* Mengurangi ukuran font untuk layar kecil */
        }
    }

    .search-button:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <!-- Spinner End -->


    <main role="main">
        <section class="bg-gray200 pt-5 pb-5">
            <!-- resources/views/detailkoleksi.blade.php -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <p>hamka</P>
                            <div class="card-header">{{ $koleksi->nama_barang }}</div>
                            {{-- @dd($koleksi->nama_barang) --}}

                            <div class="card-body">
                                <p><strong>Tahun/Abad/Masa:</strong> {{ $koleksi->tahun_abad_masa }}</p>
                                <p><strong>Cara Didapat:</strong> {{ $koleksi->cara_didapat }}</p>
                                <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            {{-- <div class="container-fluid mt-5">
                <div class="row">
                    <h5 class="font-weight-bold">More like this</h5>
                    <div class="card-columns">
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1518707399486-6d702a84ff00?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b5bb16fa7eaed1a1ed47614488f7588d&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1519408299519-b7a0274f7d67?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d4891b98f4554cc55eab1e4a923cbdb1&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1506706435692-290e0c5b4505?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0bb464bb1ceea5155bc079c4f50bc36a&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1512355144108-e94a235b10af?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c622d56d975113a08c71c912618b5f83&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1518542331925-4e91e9aa0074?ixlib=rb-0.3.5&s=6958cfb3469de1e681bf17587bed53be&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1513028179155-324cfec2566c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=32ce1df4016dadc177d6fce1b2df2429&auto=format&fit=crop&w=350&q=80"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1516601255109-506725109807?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ce4f3db9818f60686e8e9b62d4920ce5&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1505210512658-3ae58ae08744?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2ef2e23adda7b89a804cf232f57e3ca3&auto=format&fit=crop&w=333&q=80"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1488353816557-87cd574cea04?ixlib=rb-0.3.5&s=06371203b2e3ad3e241c45f4e149a1b3&auto=format&fit=crop&w=334&q=80"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1518450757707-d21c8c53c8df?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c88b5f311958f841525fdb01ab3b5deb&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>

    </main>

    <!-- Classes End -->
    @include('footer1')


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