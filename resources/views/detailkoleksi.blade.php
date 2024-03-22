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
    background-repeat: no-repeat; /* untuk menghindari pengulangan gambar */
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}
    </style>

    <div class="navigation-buttons">
        <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
    <div class="col-md-12" align="center">
        <h1 style="color: white;"><b>KOLEKSI PAMERAN</b></h1>
    </div>
    <div align="center" class="col-lg-12" style="padding-left:20px;padding-right: 20px;min-height: 471px;">
        <img src="{{ asset('storage/' . $koleksi['gambar']) }}" class="product-image" alt="Product Image" style="width:100%">
      </div>
    
      <div class="row">
        <div class="col-lg-6">
            <table class="table table-bordered table-striped, table.td" style="color: white;">
                <tr>
                    <td>Nama Barang</td>
                    <td>: {{ $koleksi->nama_barang }}</td>
                </tr>
                <tr>
                    <td>No Inventaris</td>
                    <td>: {{ $koleksi->no_inventaris}}</td>
                </tr>
                <tr>
                    <td>Asal Ditemukan</td>
                    <td>: {{ $koleksi->asal_ditemukan }}</td>
                </tr>
                <tr>
                    <td>Cara Didapat</td>
                    <td>: {{ $koleksi->cara_didapat}}</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-6">
            <table class="table table-bordered table-striped,table.td" style="color: white;">
                <tr>
                    <td>Deskripsi</td>
                   <td>: {{ $koleksi->deskripsi}}</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>: {{ $koleksi->keterangan}}</td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td>: {{ $koleksi->ukuran}}</td>
                </tr>
                <tr>
                    <td>Tahun/Abad/Masa</td>
                    <td>: {{ $koleksi->tahun_abad_masa}}</td>
                </tr>
            </table>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>