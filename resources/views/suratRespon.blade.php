<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
    .navbar {
    background-color: #103741 !important;
}

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
/* Untuk memperkecil ukuran section */
.content {
  max-width: 1150px; /* Lebar maksimum section */
  margin: 0 auto; /* Posisi section di tengah */
}

.navbar {
    background-color: #103741 !important;
} 
.form-group .row {
    margin-bottom: 1rem;
}

.form-control {
    max-width: 100%;
}

.card-footer {
    display: flex;
    justify-content: center;
}
/* Merubah warna pesan error menjadi merah */
label.error {
    color: red;
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
        <div class="navbar-nav mx-auto"> <!-- Menggunakan class mr-auto di sini -->
            <a href="/" class="nav-item nav-link ">Beranda</a>
            <a href="/about" class="nav-item nav-link ">Tentang</a>
            <a href="koleksi" class="nav-item nav-link">Koleksi Pameran</a>
            <a href="katalogbuku" class="nav-item nav-link">Katalog Buku</a>
            <a href="surat" class="nav-item nav-link active">Surat Observasi/Kunjungan</a>
        </div>
    </div>
    
</nav>
    <!-- Navbar End -->

    <br />
    <br />
    <div class="container my-5" >
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 bg-light rounded shadow">
            
                <form action="{{ url('/suratRespon/Form/store') }}" id="form" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                                <span id="nama-error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nomor_hp">Nomor HP:</label>
                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Nomor HP" value="{{ old('nomor_hp') }}">
                                <span id="nomor_hp-error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="asal_instansi">Asal Instansi:</label>
                                <input type="text" class="form-control" id="asal_intansi" name="asal_intansi" placeholder="Asal Instansi" value="{{ old('asal_intansi') }}">
                                <span id="asal_intansi-error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tanggal">Tanggal:</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="YYYY-MM-DD" readonly value="{{ old('tanggal') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="agenda">Agenda:</label>
                                <input type="text" class="form-control" id="agenda" name="agenda" placeholder="Agenda" value="{{ old('agenda') }}">
                                <span id="agenda-error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="file">File:</label>
                                <input type="file" class="form-control" id="file" name="file">
                                <span id="file-error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="captcha">Captcha:</label>
                        <div class="d-flex">
                            <div class="captcha_img mr-3">
                                {!! captcha_img('math') !!}
                            </div>
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                        </div>
                        <span id="captcha-error" class="text-danger"></span>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    @include('footer1')
   
      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <!-- Memuat jQuery Validation -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  
      <!-- Template Javascript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    var tanggalInput = document.getElementById('tanggal');
    var today = new Date().toISOString().split('T')[0];
    tanggalInput.setAttribute('min', today);
});

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tanggalInput = document.getElementById('tanggal');
            var datatanggalpenuh = {!! json_encode($data_penuh) !!};
    
            tanggalInput.addEventListener('click', function () {
                tanggalInput.setAttribute('type', 'date'); // Ubah input type ke date
                tanggalInput.removeAttribute('readonly'); // Hapus atribut readonly agar dapat diubah
                tanggalInput.addEventListener('change', function () {
                    var selectedDate = this.value;
                    if (datatanggalpenuh.includes(selectedDate)) {
                        alert('Tanggal tidak tersedia');
                        tanggalInput.value = ''; // Reset input jika tanggal tidak tersedia
                    }
                });
            });
        });
    </script>
  <script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                nama: {
                    required: true,
                },
                nomor_hp: {
                    required: true,
                },
                asal_intansi: {
                    required: true,
                },
                tanggal: {
                    required: true,
                },
                agenda: {
                    required: true,
                },
                file: {
                    required: true,
                }
            },
            messages: { // Menambahkan pesan error untuk setiap field yang tidak diisi
                nama: {
                    required: "Nama harus diisi",
                },
                nomor_hp: {
                    required: "Nomor HP harus diisi",
                },
                asal_intansi: {
                    required: "Asal Instansi harus diisi",
                },
                tanggal: {
                    required: "Tanggal harus diisi",
                },
                agenda: {
                    required: "Agenda harus diisi",
                },
                file: {
                    required: "File harus diunggah",
                }
            },
            submitHandler: function(form) {
                // Jika semua validasi terpenuhi, submit form
                form.submit();
            }
        });
    });
    </script>
    
    
    
    
</body>

</html>
