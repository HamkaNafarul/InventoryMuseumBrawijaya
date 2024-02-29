<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage - Museum Brawijaya Malang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="{{ asset('asset/css/koleksi.css') }}" rel="stylesheet">
</head>
<body>

  @include('navbar')

  <div class="col-md-12" align="center">
      <h1 style="color: white;"><b>KATALOG BUKU PERPUSTAKAAN</b></h1>
  </div>
<div align="center" class="col-lg-12" style="padding-left:20px;padding-right: 20px;min-height: 471px;">
  <div class="col-md-8">
    <div class="input-group mb-3">
     <select class="form-control" style="border-radius: 0;">
        <option disabled selected>Katgeori</option>
        <option>Kategori 1</option>
        <option>Kategori 2</option>
      </select>
      <input type="text" class="form-control" placeholder="Tahun" style="border-radius: 0;">
      <input type="text" class="form-control" placeholder="Cari Berdasarkan No Koleksi"  style="border-radius: 0;">
      <div class="input-group-append">
        <button class="btn" style="background-color: #6A7A74;">Cari</button>
      </div>
    </div>
  </div>
  <div class="col-md-12 row">
    <div class="col-md-3">
      <div class="card" style="width: 314px;">
        <a href="pameran" style="text-decoration: none; color: black;">
        <img style="min-height: 247px;" class="card-img-top" src="gambar/pameran.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" align="right"><b>Koleksi 1</b></h5>
          <p align="left" class="card-text">Tahun</p>
          <textarea class="form-control" rows="4" style="background-color: #B6AFAF;" placeholder="Deskripsi Barang" readonly></textarea>
        </div>
      </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 314px;">
        <a href="pameran" style="text-decoration: none; color: black;">
        <img style="min-height: 247px;" class="card-img-top" src="gambar/pameran.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" align="right"><b>Koleksi 1</b></h5>
          <p align="left" class="card-text">Tahun</p>
          <textarea class="form-control" rows="4" style="background-color: #B6AFAF;" placeholder="Deskripsi Barang" readonly></textarea>
        </div>
      </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 314px;">
        <a href="pameran" style="text-decoration: none; color: black;">
        <img style="min-height: 247px;" class="card-img-top" src="gambar/pameran.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" align="right"><b>Koleksi 1</b></h5>
          <p align="left" class="card-text">Tahun</p>
          <textarea class="form-control" rows="4" style="background-color: #B6AFAF;" placeholder="Deskripsi Barang" readonly></textarea>
        </div>
      </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 314px;">
        <a href="pameran" style="text-decoration: none; color: black;">
        <img style="min-height: 247px;" class="card-img-top" src="gambar/pameran.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" align="right"><b>Koleksi 1</b></h5>
          <p align="left" class="card-text">Tahun</p>
          <textarea class="form-control" rows="4" style="background-color: #B6AFAF;" placeholder="Deskripsi Barang" readonly></textarea>
        </div>
      </a>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>