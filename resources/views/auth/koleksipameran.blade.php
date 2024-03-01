<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
  <link href="{{ asset('asset/css/adminlte.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
      @include('auth/sidebar')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
                <h3 class="card-title">Koleksi Pameran</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card">
                          <div class="card-header">
                            <a href="{{ url('dashboardd/koleksipameran/Form') }}" class="btn btn-success">Tambah</a>
                        </div>
                        
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>no_inventaris</th>
                                        <th>Nama Barang</th>
                                        <th>Asal Ditemukan</th>
                                        <th>Ukuran</th>
                                        <th>keterangan</th>
                                        <th>Action</th> <!-- Kolom tambahan untuk tombol action -->
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($koleksis as $key => $koleksi)
                                  <tr>
                                      <td>{{ $key + 1 }}</td>
                                      <td>{{ $koleksi->no_inventaris }}</td>
                                      <td>{{ $koleksi->nama_barang }}</td>
                                      <td>{{ $koleksi->asal_ditemukan }}</td>
                                      <td>{{ $koleksi->ukuran }}</td>
                                      <td>{{ $koleksi->keterangan }}</td>
                                      <td>
                                          <button class="btn btn-primary btn-sm">Edit</button>
                                          <button class="btn btn-primary btn-sm">Show</button>
                                          <button class="btn btn-danger btn-sm">Delete</button>
                                      </td>
                                  </tr>
                                  @endforeach
                                    <!-- Tambahkan baris berikutnya sesuai dengan kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
          </div>
            <!-- /.row -->
            
              
         
