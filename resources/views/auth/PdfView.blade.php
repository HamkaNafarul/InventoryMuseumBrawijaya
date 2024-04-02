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
    </style>
</head>
<body>
    @foreach($koleksi as $koleksidata)
    <div class="row">
        <div class="col-lg-6">
            <p>Nama Barang: {{ $koleksidata->nama_barang }}</p>
            <p>No Inventaris: {{ $koleksidata->no_inventaris }}</p>
            <p>Asal Ditemukan: {{ $koleksidata->asal_ditemukan }}</p>
            <p>Cara Didapat: {{ $koleksidata->cara_didapat }}</p>
        </div>
        <div class="col-lg-6">
            <p>Deskripsi: {{ $koleksidata->deskripsi }}</p>
            <p>Keterangan: {{ $koleksidata->keterangan }}</p>
            <p>Ukuran: {{ $koleksidata->ukuran }}</p>
            <p>Tahun/Abad/Masa: {{ $koleksidata->tahun_abad_masa }}</p>
        </div>
    </div>
    @endforeach
</body>
</html>
