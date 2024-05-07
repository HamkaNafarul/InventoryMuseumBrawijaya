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
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
      @include('auth/sidebar')
      <div class="content-wrapper" style="height: 680px; background-image: url('{{ asset('gambar/bg5.png') }}');">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="col-sm-6"style="color: white;"> 
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
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-3 col-6">
                    <div class="description-block border-right">
                      <h5 class="description-header">{{ $jumlah_koleksi_pameran }}</h5>
                      <span class="description-text">Koleksi Pameran</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-6">
                    <div class="description-block border-right">
                      <h5 class="description-header">{{ $jumlah_koleksi_buku }}</h5>
                      <span class="description-text">Katalog Buku</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-6">
                    <div class="description-block border-right">
                      <h5 class="description-header">{{ $jumlah_users }}</h5>
                      <span class="description-text">Admin</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-6">
                    <div class="description-block">
                      <h5 class="description-header">{{ $jumlah_surat }}</h5>
                      <span class="description-text">Surat Masuk</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
         
