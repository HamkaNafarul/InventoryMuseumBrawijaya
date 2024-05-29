<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link href="{{ asset('asset/css/adminlte.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/css/Form.css') }}" rel="stylesheet">
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">KOLEKSI BUKU</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('dashboardd/koleksibuku/FormBuku/store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="nomor">Nomor</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="nomor">
                            @error('nomor')
                                <span class="text-danger">Nomor Sudah Ada</span>
                            @enderror
                        </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul">
                            </div>
                            <div class="form-group">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="pengarang">
                            </div>
                            <div class="form-group">
                                <label for="edisi">Edisi</label>
                                <input type="text" class="form-control" id="edisi" name="edisi" placeholder="edisi">
                            </div>
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="tahun_terbit">
                              </div>
                            <div class="form-group">
                                <label for="issn">ISSN</label>
                                <input type="text" class="form-control" id="issn" name="issn" placeholder="issn">
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="penerbit">
                            </div>
                            <div class="form-group">
                                <label for="tempat_terbit">Tempat Terbit</label>
                                <input type="text" class="form-control" id="tempat_terbit" name="tempat_terbit" placeholder="tempat_terbit">
                            </div>
                            <div class="form-group">
                              <label for="kualifikasi">Kualifikasi</label>
                              <input type="text" class="form-control" id="kualifikasi" name="kualifikasi" placeholder="kualifikasi">
                          </div>
                          <div class="form-group">
                            <label for="bahasa">Bahasa</label>
                            <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="bahasa">
                        </div>
                        <div class="form-group">
                          <label for="abstrak">Abstrak</label>
                          <textarea class="form-control" id="abstrak" name="abstrak" placeholder="abstrak"></textarea>
                        </div>
                    <div class="form-group">
                      <label for="subjek">Subjek</label>
                      <input type="text" class="form-control" id="subjek" name="subjek" placeholder="subjek">
                  </div>
                            <div class="form-group">
                                <label for="sampul">Sampul</label>
                                <input type="file" class="form-control-file" id="sampul" name="sampul">
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
        </div>
    </div>
</section>
