<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage - Museum Brawijaya Malang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="{{ asset('asset/css/koleksi.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/css/css.css') }}" rel="stylesheet">
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
@include('navbar')

  <div class="col-md-12" align="center">
      <h1 style="color: white;"><b>KOLEKSI PAMERAN</b></h1>
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
        <button class="btn" style="btn btn-primary py-3 px-5 mt-2: #6A7A74;">Cari</button>
      </div>
    </div>
  </div>
  <!-- Add icon library -->
  <div class="card-container">
    <div class="card">
      <img src="{{ asset('gambar/pameran.png') }}" alt="John" style="width:100%">
      <h1>KOLEKSI</h1>
      <p class="title">Senjata Besi</p>
      <p>Deskripsi</p>
      <button class="btn btn-primary py-3 px-5 mt-2">Detail</button>
    </div>
    <div class="card">
      <img src="{{ asset('gambar/pameran.png') }}" alt="John" style="width:100%">
      <h1>KOLEKSI</h1>
      <p class="title">Senjata Besi</p>
      <p>Deskripsi</p>
      <button class="btn btn-primary py-3 px-5 mt-2">Detail</button>
    </div>
    <div class="card">
      <img src="{{ asset('gambar/pameran.png') }}" alt="John" style="width:100%">
      <h1>KOLEKSI</h1>
      <p class="title">Senjata Besi</p>
      <p>Deskripsi</p>
      <button class="btn btn-primary py-3 px-5 mt-2">Detail</button>
    </div>
  </div>
</div>
    @include('footer1')


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>



