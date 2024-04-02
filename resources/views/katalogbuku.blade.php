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

  <link href="{{ asset('asset/css/katalogbuku.css') }}" rel="stylesheet">
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
      <h1 style="color: white;"><b>KATALOG BUKU PERPUSTAKAAN</b></h1>
  </div><br>
<div align="center" class="col-lg-12" style="padding-left:20px;padding-right: 20px;min-height: 471px;">
  <div class="search-box">
    <form action="#" method="GET" class="mb-4" style="display: flex; align-items: center; width: 100%;">
      <input type="text" name="query" class="form-control search-input" placeholder="Search..." style="flex: 1;">
      <button type="submit" class="btn btn-primary search-button">Search</button>
    </form>
  </div>
  <!-- Add icon library -->
  <div class="card-container">
    @foreach($koleksibuku as $item)
        <div class="card">
            @if(isset($item->sampul))
                <img src="{{ asset('storage/' . $item->sampul) }}" class="product-image" alt="Product Image" style="width:100%">
            @endif
            <h1 class="nama text-white">{{ $item->judul }}</h1>
            <p class="title text-white">{{ $item->pengarang }}</p>
            <p class="didapat text-black">{{ $item->tempat_terbit }}</p>
            <a href="{{ route('detailkoleksibuku_landing', ['id' => $item->id]) }}" class="btn btn-primary py-3 px-5 mt-2">Detail</a>
        </div>
    @endforeach
</div>
</div>
@include('footer1')

 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>



