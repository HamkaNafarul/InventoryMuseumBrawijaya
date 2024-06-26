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
                      <div class="card card-primary mx-auto">
                          <div class="card-header">
                              <h3 class="card-title">Form Tambah</h3>
                          </div>
                    <!-- /.card-header -->
                    <!-- form start -->
  

                    <form action="{{ url('dashboardd/koleksipameran/Form/store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                            </div>
                            <div class="form-group">
                              <label for="no_inventaris">No Inventaris</label>
                              <input type="text" class="form-control @error('no_inventaris') is-invalid @enderror" id="no_inventaris" name="no_inventaris" placeholder="No Inventaris">
                          </div>
                          <div class="form-group">
                              <label for="no_registrasi">No Registrasi</label>
                              <input type="text" class="form-control @error('no_registrasi') is-invalid @enderror" id="no_registrasi" name="no_registrasi" placeholder="No Registrasi">
                          </div>
                            <div class="form-group">
                                <label for="asal_ditemukan">Asal Ditemukan</label>
                                <input type="text" class="form-control" id="asal_ditemukan" name="asal_ditemukan" placeholder="Asal Ditemukan">
                            </div>
                            <div class="form-group">
                                <label for="cara_didapat">Cara Didapat</label>
                                <input type="text" class="form-control" id="cara_didapat" name="cara_didapat" placeholder="Cara Didapat">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ukuran">Ukuran</label>
                                <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran">
                            </div>
                            <div class="form-group">
                                <label for="tahun_abad_masa">Tahun/Abad/Masa</label>
                                <input type="text" class="form-control" id="tahun_abad_masa" name="tahun_abad_masa" placeholder="Tahun/Abad/Masa">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
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
</body>
</html>
