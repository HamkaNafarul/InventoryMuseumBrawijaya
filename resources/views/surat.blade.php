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
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet"> --}}

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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <link rel="stylesheet" href="galeri\css\app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href="{{ asset('asset/css/adminlte.min.css') }}" rel="stylesheet">

    


</head>
<style>
   .fc-day.fc-day-disabled {
    background-color: transparent !important;
    color: transparent !important;
    cursor: not-allowed !important;
    background-image: url('gambar/silang.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}
.fc-day-before{
    background-color: silver !important;
}
/* Untuk memperkecil ukuran section */
.content {
  max-width: 1150px; /* Lebar maksimum section */
  margin: 0 auto; /* Posisi section di tengah */
}
#calendar {
    max-width: 1000px; /* Lebar maksimum section */
    margin: 0 auto; /* Posisi section di tengah */
    background-color: #ffffff; /* Memberikan warna putih pada background kalender */
    border-radius: 5px; /* Memberikan sudut lengkung pada border kalender */
    padding: 20px; /* Memberikan padding agar konten tidak terlalu dekat dengan border */
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
    <section class="description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">SURAT OBSERVASI/KUNJUNGAN</h3>
                            <p class="card-text">Kolom kalender di bawah menampilkan hari-hari yang sudah terisi (X) dan bisa dijadikan referensi untuk melihat tutorial penggunaannya <a href="about#tutorial">di sini</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                         <div class="card-header">
                            <h3 class="card-title">Status Surat</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-secondary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Cek Status
                                </button>                                                           
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0 collapse" id="collapseExample">
                            <table class="table table-hover text-nowrap" id="surat">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Intansi</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($surat as $surats)
                                    <tr>
                                        <td>{{ $surats->tanggal }}</td>
                                        <td>{{ $surats->nama }}</td>
                                        <td>{{ $surats->asal_intansi }}</td>
                                        <td>
                                            @if($surats->status == 0)
                                                <span class="badge bg-secondary">Belum di-ACC</span>
                                            @elseif($surats->status == 1)
                                                <span class="badge bg-success">Sudah di-ACC</span>
                                            @endif
                                        </td>                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    

    
    <main role="main"> 
           <div class="container">
            <div class="bg-light rounded shadow">
        <div id="calendar"></div>
    </div>
           </div>
    </main>

    <!-- Card Form -->
    <!-- Card Form -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Surat/Observasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModalButton">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="FormEvent" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            <span id="nama-error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp">Nomor HP:</label>
                            <input type="text" class="form-control" id="nomor_hp" name="nomor_hp"placeholder="Nomor HP">
                            <span id="nomor_hp-error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="asal_instansi">Asal Instansi:</label>
                            <input type="text" class="form-control" id="asal_intansi" name="asal_intansi"placeholder="Asal Instansi">
                            <span id="asal_intansi-error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal:</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="YYYY-MM-DD"readonly>
                        </div>
                        <div class="form-group">
                            <label for="agenda">Agenda:</label>
                            <input type="text" class="form-control" id="agenda" name="agenda" placeholder="Agenda">
                            <span id="agenda-error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="file">File:</label>
                            <input type="file" class="form-control" id="file" name="file" placeholder="File">
                            <span id="file-error" class="text-danger"></span>
                        </div>
                        <div class="captcha">
                            <div class="input-group-prepend captcha_img">
                                <span>{!! captcha_img('math') !!}</span>
                                
                            </div> 
                        </div>
                        <div class="form-group">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                            <span id="captcha-error" class="text-danger"></span>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        id="closeModalButton">Close</button>
                    <button type="submit" class="btn btn-primary" id="submitForm">Submit</button>
                </div>
            </div>
        </div>
    </div>




    <!-- Classes End -->
    @include('footer1')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- JavaScript Libraries -->
    <script src="galeri\js\app.js"></script>
    <script src="galeri\js\theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Data Tabel -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">




    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
$(document).ready(function () {
    var disabledDates = {!! json_encode($data_penuh) !!};

    var calendar = $('#calendar').fullCalendar({
        selectable: true,
        selectHelper: true,
        select: function (start, allDay) {
            var selectedDate = start.format('YYYY-MM-DD');
            if (disabledDates.includes(selectedDate) || start.isBefore(moment(), 'day')) {
                alert('Tanggal ini tidak bisa dipilih');
            } else {
                $('#eventModal').modal('show');
                $('#tanggal').val(moment(start).format('YYYY-MM-DD'));
            }
        },
        editable: true,
        eventResize: function (event) {
            // your code here
        },
        eventDrop: function (event) {
            // your code here
        },
        eventClick: function (event) {
            // your code here
        },
        dayRender: function (date, cell) {
            var dateString = date.format('YYYY-MM-DD');
            if (disabledDates.includes(dateString)) {
                cell.addClass('fc-day-disabled');
                cell.attr('title', 'Tanggal ini tidak bisa dipilih');
            } else if (date.isBefore(moment(), 'day')) {
                // Tanggal sudah lewat, berikan ikon pertama
                cell.addClass('fc-day-before');
            } else {
                // Tanggal masih dapat dipilih, berikan ikon kedua
                cell.addClass('fc-day-enabled');
            }
        }
    });




//KEAMPAT
// Menghitung jumlah percobaan salah
var captchaAttempts = 0;

$('#submitForm').unbind().click(function () {
    // Mengambil nilai input
    var nama = $('#nama').val();
    var nomor_hp = $('#nomor_hp').val();
    var asal_intansi = $('#asal_intansi').val();
    var agenda = $('#agenda').val();
    var file = $('#file')[0].files[0];
    var captcha = $('#captcha').val();
    var form_data = new FormData();
    var csrf_token = document.querySelector('meta[name="csrf-token"]').content;
    form_data.append('nama', nama);
    form_data.append('nomor_hp', nomor_hp);
    form_data.append('asal_intansi', asal_intansi);
    form_data.append('agenda', agenda);
    form_data.append('file', file);
    form_data.append('tanggal', $('#tanggal').val());
    form_data.append('captcha', captcha);

    if (nama && nomor_hp && asal_intansi && agenda && file && captcha) {
        $.ajax({
            url: "{{ url('surat/Form/store') }}",
            type: "POST",
            data: form_data,
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            contentType: false,
            processData: false,
            success: function () {
                // Mengganti gambar captcha dengan yang baru
                $('.captcha_img').html('<span>{!! captcha_img('math') !!}</span>');
                // Mengosongkan field captcha
                $('#captcha').val('');
                // Memperbarui kalender
                calendar.fullCalendar('refetchEvents');
                // Menutup modal
                $('#eventModal').modal('hide');
                // Menampilkan alert bahwa submit berhasil tanpa reload halaman
                alert('Form berhasil disubmit!');

                  // Mereset formulir
                  location.reload();
                 document.getElementById('FormEvent').reset();
            },
            error: function(xhr, textStatus, errorThrown) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    if (errors.hasOwnProperty('captcha')) {
                        captchaAttempts++;
                        if (captchaAttempts == 2) {
                            alert('Captcha salah dua kali, halaman akan di-refresh.');
                        }
                        if (captchaAttempts >= 2) {
                            // Jika dua kali captcha salah, reload halaman
                            window.location.reload();
                        } else {
                            $('#captcha-error').text('Hasil Perhitungan Salah');
                            // Memperbarui gambar captcha jika submit tidak berhasil
                            $('.captcha_img').html('<span>{!! captcha_img('math') !!}</span>');
                        }
                    }
                }
            }
        });
    } else {

        // Tambahkan pesan error untuk captcha
        $('#captcha-error').text('The captcha field is required.');
        // Memperbarui gambar captcha jika submit tidak berhasil
        $('.captcha_img').html('<span>{!! captcha_img('math') !!}</span>');
    }
});
    $('#closeModalButton').on('click', function () {
        $('#eventModal').modal('hide');
    });
});

</script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
       
    });
</script> 
<script>
    $(document).ready(function () {
        
    });
</script>
<script>
    $(document).ready(function() {
        $('#surat').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>

</html>