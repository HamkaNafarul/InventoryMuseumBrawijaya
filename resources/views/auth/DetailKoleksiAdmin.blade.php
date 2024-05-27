<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="{{ asset('asset/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
    html {
        background-color: #212529;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('auth/sidebar_dua')
        <div class="content-wrapper" style="background-image: url('{{ asset('gambar/bg5.png') }}');">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6" style="color: white;">
                            <h1>Selamat Datang</h1>
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
                                  <h3 class="card-title">Dashboard Admin</h3>
                                  <div class="card-tools">
                                      <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                          data-toggle="tooltip" title="Collapse">
                                          <i class="fas fa-minus"></i></button>
                                      <button type="button" class="btn btn-tool" data-card-widget="remove"
                                          data-toggle="tooltip" title="Remove">
                                          <i class="fas fa-times"></i></button>
                                  </div>
                              </div>
            <main role="main">
              <section class="bg-gray200 pt-5 pb-5">
                  <div class="container">
                      <div class="bg-light rounded shadow">
                      <div class="row">
                          <div class="col-md-6 col-12">
                              <img src="{{ asset('storage/' . $koleksi['gambar']) }}" class="product-image" alt="Product Image">
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="card">
                                  <div class="card-header">{{ $koleksi->nama_barang }}</div>
                                  <div class="card-body">
                                    <p><strong>Nomor Inventaris:</strong> {{ $koleksi->no_inventaris }}</p>
                                      <p><strong>Tahun/Abad/Masa:</strong> {{ $koleksi->tahun_abad_masa }}</p>
                                      <p><strong>Cara Didapat:</strong> {{ $koleksi->cara_didapat }}</p>
                                      <p><strong>Asal Ditemukan:</strong> {{ $koleksi->asal_ditemukan }}</p>
                                      <p><strong>Keterangan:</strong> {{ $koleksi->ketarangan }}</p>
                                      <p><strong>Deskripsi:</strong> {{ $koleksi->deskripsi }}</p>
                                    </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
              </section>
          </main>
         
</body>

</html>
