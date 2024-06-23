<!DOCTYPE html>
<html>
<head>
    <title>PDF View</title>
    <style>
        /* CSS untuk tampilan PDF */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }
        @page {
            size: landscape;
            margin: 1.5cm;
        }
        header {
            top: 0;
            left: 0;
            right: 0;  
            background-color: #f2f2f2;
            padding: 10px 20px;
            text-align: center;
        }
        .logo {
            height: 60px; /* Sesuaikan dengan tinggi logo */
            margin-bottom: 10px;
        }
        .address {
            font-size: 10px;
            margin-top: 10px;
        }
        .kop-surat {
            border-bottom: 1px solid #000; /* Garis di bawah kop surat */
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px; /* Sesuaikan dengan tinggi header */
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            page-break-inside: avoid;
        }
        th {
            background-color: #f2f2f2;
        }
        .my-3 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        thead {
            display: table-header-group; /* Menampilkan header tabel pada setiap halaman */
        }
    </style>
</head>
<body>
    <header>
        <table style="margin-top: 0px;">
            <thead>
                <tr style="border: none;">
                    <td style="border: none;">
                        <div>
                            @php
                            $img = asset('gambar/image2.png');
                            $base_64 = base64_encode($img);
                            $img = 'data:image/png;base64,' . $base_64;
                            @endphp
                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/image2.png'))) }}"
                            class="app-image-style" style="height: 90px;"/>
                        </div>
                    </td>
                    <td style="text-align: center; border: none;">
                        <div class="address">
                            <h1>MUSEUM BRAWIJAYA<br>
                            Jalan Museum No. 1, Kota Malang, Indonesia<br>
                            Telepon: (123) 456-7890 | Email: info@museum.com</h1>
                        </div>
                    </td>
                    <td style="text-align: right; border: none;">
                        <div>
                            @php
                            $img = asset('gambar/image1.png');
                            $base_64 = base64_encode($img);
                            $img = 'data:image/png;base64,' . $base_64;
                            @endphp
                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/image1.png'))) }}"
                            class="app-image-style" style="height: 90px;" />
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </header>
    <table>
        <thead>
            <tr>                                                                            
                <th>Nomor Inventaris</th>
                <th>Nomor Registrasi</th>
                <th>Nama Barang</th>
                <th>Asal Ditemukan</th>
                <th>Cara Didapat</th>
                <th>Deskripsi</th>
                <th>Keterangan</th>
                <th>Ukuran</th>
                <th>Tahun Abad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($koleksi as $koleksi)
            <tr>
                <td>{{ $koleksi->nomorKoleksi->no_inventaris }}</td>
                <td>{{ $koleksi->nomorKoleksi->no_registrasi }}</td>
                <td>{{ $koleksi->nama_barang }}</td>
                <td>{{ $koleksi->asal_ditemukan }}</td>
                <td>{{ $koleksi->cara_didapat }}</td>
                <td>{{ $koleksi->deskripsi }}</td>
                <td>{{ $koleksi->keterangan }}</td>
                <td>{{ $koleksi->ukuran }}</td>
                <td>{{ $koleksi->tahun_abad_masa }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
