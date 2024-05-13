<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link href="{{ asset('asset/css/adminlte.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/css/FormTanggal.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
  html {
      background-color: #212529;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
      @include('auth/sidebar')
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
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
                <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-6">
                      <!-- general form elements -->
                      <div class="card card-primary mx-auto">
                          <div class="card-header">
                              <h3 class="card-title">Form Tambah</h3>
                          </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('store_tanggal') }}" method="POST" role="form" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                          <div class="form-group">
                              <label for="tanggal_penuh">Tanggal Penuh</label>
                              <input type="date" class="form-control" id="tanggal_penuh" name="tanggal_penuh" placeholder="Tanggal Penuh">
                          </div>
                      </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>
