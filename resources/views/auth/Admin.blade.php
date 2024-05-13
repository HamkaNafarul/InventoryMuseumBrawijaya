<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('asset/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
</head>
<style>
    html {
        background-color: #212529;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('auth/sidebar')
        <div class="content-wrapper" style="height: 680px; background-image: url('{{ asset('gambar/bg5.png') }}');">
            <!-- Isi konten di sini -->        
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6" style="color: white;">
                            <h1>Selamat Datang</h1>
                        </div>
                    </div>
                </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Kelolah Admin</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            data-toggle="tooltip" title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                            <!-- /.card-header -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="{{ url('dashboardd/Admin/Form_Admin') }}" class="btn btn-success btn-block">Tambah</a>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                
                                                <div class="card-body">
                                                    <table class="table table-hover text-nowrap" id="admin_data">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama</th>
                                                                <th>Email</th>
                                                                <th>Action</th>
                                                                <!-- Kolom tambahan untuk tombol action -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset('asset/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('asset/js/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#admin_data').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('/dashboardd/Admin/User') }}',
                columns: [
    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
    { data: 'name', name: 'name' },
    { data: 'email', name: 'email' },
    { data: 'action', name: 'action' }
]


            });

            $('#admin_data').on('click', 'a.delete-users', function(e) {
                e.preventDefault();
                var deleteUrl = $(this).data('url');

                if (confirm('Are you sure?')) {
                    fetch(deleteUrl, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.warning) {
                                alert(data.warning);
                            } else {
                                // Handle success, e.g., reload the DataTable
                                $('#admin_data').DataTable().ajax.reload();
                                location.reload();
                            }
                        })
                        .catch(error => {
                            // Handle error
                            console.error(error);
                        });
                }
            });
        }); 
    </script>
    </body>
    </html>