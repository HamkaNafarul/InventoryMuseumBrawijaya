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
<style>
    html {
        background-color: #212529;
    }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('auth/sidebar')
        <div class="content-wrapper" style="height: 980px; background-image: url('{{ asset('gambar/bg5.png') }}');">
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
                                    <h3 class="card-title">Surat Masuk</h3>
                                   
                                </div>
                               
                                <div class="card-body table-responsive">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="bulan" class="form-label">Filter Bulan:</label>
                                            <select id="bulan" name="bulan" class="form-control">
                                                <option value="">-- Pilih Bulan --</option>
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="tahun" class="form-label">Filter Tahun:</label>
                                            <select id="tahun" name="tahun" class="form-control">
                                                <option value="">-- Pilih Tahun --</option>
                                                @for($i = date('Y'); $i >= 2000; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <table class="table table-hover text-nowrap" id="surat">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>Asal Intansi</th>
                                                <th>Nomor HP</th>
                                                <th>Agenda</th>
                                                <th>File</th>
                                                <th>Action</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data tabel -->
                                        </tbody>
                                    </table>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /.row -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="{{ asset('asset/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('asset/js/demo.js') }}"></script>
    <script>
        function accSurat(id) {
            $.ajax({
                url: '/dashboardd/suratmasuk/acc/' + id,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    
        $(document).ready(function () {
            var table = $('#surat').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ url('/dashboardd/suratmasuk/data')}}',
                    data: function (d) {
                        d.bulan = $('#bulan').val().padStart(2, '0');
                        d.tahun = $('#tahun').val();
                    }
                },
                columns: [{
            data: null,
            name: 'DT_RowIndex',
            orderable: false,
            searchable: false,
            render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            }
        },
        {
            data: 'tanggal',
            name: 'tanggal',
            render: function (data, type, row) {
                return moment(data).format('DD-MM-YYYY');
            }
        },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'asal_intansi',
                        name: 'asal_intansi'
                    },
                    {
                        data: 'nomor_hp',
                        name: 'nomor_hp'
                    },
                    {
                        data: 'agenda',
                        name: 'agenda'
                    },
                    {
                        data: 'file',
                        name: 'file',
                        render: function (data, type, full, meta) {
                            return '<a href="/storage/' + data +
                                '" target="_blank">Download</a>';
                        }
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function (data, type, full, meta) {
                            console.log(full.id)
                            if (data == 0) {
                                return '<button class="btn btn-sm btn-primary" onclick="accSurat(' +
                                    full.id + ')">ACC</button>';
                            } else if (data == 1) {
                                return '<span class="badge badge-success">Diterima</span>';
                            } else {
                                return '';
                            }
                        }
                    },
                ]
            });

            $('#bulan, #tahun').change(function () {
                table.ajax.reload();
            });
            $('#surat').on('click', 'a.delete-users', function (e) {
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
                                $('surat').DataTable().ajax.reload();
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
