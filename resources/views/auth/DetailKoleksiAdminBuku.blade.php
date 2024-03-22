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
            
                  <!-- Default box -->
                  <div class="card card-solid">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-sm-6">
                          <h3 class="d-inline-block d-sm-none">KATALOG BUKU</h3>
                          <div class="col-12">
                            <img src="{{ asset('storage/' . $koleksibuku['sampul']) }}" class="product-image" alt="Product Image">
                        </div>
                        </div>
                        <div class="col-12 col-sm-6">
                          <h1 class="my-3">{{$koleksibuku->judul}}</h1>
                        </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Pengarang</h3>
                            <p>{{$koleksibuku->pengarang}}</p>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Edisi</h3>
                            <p>{{$koleksibuku->edisi}}</p>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Tahun Terbit</h3>
                            <p>{{$koleksibuku->tahun_terbit}}</p>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">ISSN</h3>
                            <p>{{$koleksibuku->issn}}</p>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Penerbit</h3>
                            <p>{{$koleksibuku->penerbit}}</p>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Tempat Terbit</h3>
                            <p>{{$koleksibuku->tempat_terbit}}</p>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Kualifikasi</h3>
                            <p>{{$koleksibuku->kualifikasi}}</p>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Bahasa</h3>
                            <p>{{$koleksibuku->bahasa}}</p>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Subjek</h3>
                            <p>{{$koleksibuku->subjek}}</p>
                          </div>

                          </div>
                          <div class="mt-4 product-share">
                          </div>
                       </div>
                      </div>
                      <div class="row mt-4">
                        <nav class="w-100">
                          <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Abstrak</a>
                          </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="text" style="width: 900px">
                          <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{$koleksibuku->abstrak}}</div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            
                </section>
                <!-- /.content -->
              </div>
            </body>
</html>

