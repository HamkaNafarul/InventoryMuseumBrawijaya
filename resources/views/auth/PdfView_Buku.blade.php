<!DOCTYPE html>
<html>
<head>
    <title>PDF View</title>
    <style>
        /* CSS untuk tampilan PDF */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .my-3 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    @foreach($koleksibuku as $buku)
    <div class="row">
        <div class="col-12 col-sm-6">
            <h1 class="my-3">{{ $buku->judul }}</h1>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">Pengarang</h3>
            <p>{{ $buku->pengarang }}</p>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">Edisi</h3>
            <p>{{ $buku->edisi }}</p>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">Tahun Terbit</h3>
            <p>{{ $buku->tahun_terbit }}</p>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">ISSN</h3>
            <p>{{ $buku->issn }}</p>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">Penerbit</h3>
            <p>{{ $buku->penerbit }}</p>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">Tempat Terbit</h3>
            <p>{{ $buku->tempat_terbit }}</p>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">Kualifikasi</h3>
            <p>{{ $buku->kualifikasi }}</p>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">Bahasa</h3>
            <p>{{ $buku->bahasa }}</p>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">Subjek</h3>
            <p>{{ $buku->subjek }}</p>
        </div>
    </div>
    @endforeach
</body>
</html>
