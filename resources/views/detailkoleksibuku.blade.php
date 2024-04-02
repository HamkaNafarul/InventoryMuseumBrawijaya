<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
  <title>Homepage - Museum Brawijaya Malang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="{{ asset('asset/css/detailkoleksi.css') }}" rel="stylesheet">
</head>
<body>
    <style>
body {
    background-image: url('{{ asset('gambar/bg5.png') }}');
    background-size: cover; /* untuk mengisi area background */
    background-repeat: repeat; /* untuk mengulang gambar */
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}
    </style>

<div class="navigation-buttons">
    <a href="/katalogbuku" class="btn btn-primary">Kembali ke Beranda</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('storage/' . $koleksibuku['sampul']) }}" class="product-image" alt="Product Image" style="width:80%">
        </div>
        <div class="col-lg-6">
            <h1 style="color: white;"><b>KOLEKSI BUKU</b></h1>
            <table class="table table-bordered table-striped" style="color: white;">
                <tr>
                    <td style="color: white;">judul</td>
                    <td style="color: white;">: {{ $koleksibuku->judul }}</td>
                </tr>
                <tr>
                    <td style="color: white;">nomor</td>
                    <td style="color: white;">: {{ $koleksibuku->nomor}}</td>
                </tr>
                <tr>
                    <td style="color: white;">edisi</td>
                    <td style="color: white;">: {{ $koleksibuku->edisi }}</td>
                </tr>
                <tr>
                    <td style="color: white;">tahun_terbit</td>
                    <td style="color: white;">: {{ $koleksibuku->tahun_terbit}}</td>
                </tr>
                <tr>
                    <td style="color: white;">issn</td>
                    <td style="color: white;">: {{ $koleksibuku->issn}}</td>
                </tr>
                <tr>
                    <td style="color: white;">penerbit</td>
                    <td style="color: white;">: {{ $koleksibuku->penerbit}}</td>
                </tr>
                <tr>
                    <td style="color: white;">tempat_terbit</td>
                    <td style="color: white;">: {{ $koleksibuku->tempat_terbit}}</td>
                </tr>
                <tr>
                    <td style="color: white;">kualifikasi</td>
                    <td style="color: white;">: {{ $koleksibuku->kualifikasi}}</td>
                </tr>
                <tr>
                    <td style="color: white;">bahasa</td>
                    <td style="color: white;">: {{ $koleksibuku->bahasa}}</td>
                </tr>
                <tr>
                    <td style="color: white;">abstrak</td>
                    <td style="color: white;">: {{ $koleksibuku->abstrak}}</td>
                </tr>
                <tr>
                    <td style="color: white;">subjek</td>
                    <td style="color: white;">: {{ $koleksibuku->subjek}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@include('footer1')

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>