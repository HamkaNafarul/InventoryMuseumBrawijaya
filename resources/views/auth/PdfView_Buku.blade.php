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
            height: 60px;
            /* Sesuaikan dengan tinggi logo */
            margin-bottom: 10px;
        }

        .address {
            font-size: 10px;
            margin-top: 10px;
        }

        .kop-surat {
            border-bottom: 1px solid #000;
            /* Garis di bawah kop surat */
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            page-break-inside: auto;
        }

        th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    word-wrap: break-word; /* Memisahkan kata panjang ke baris baru */
    max-width: auto; /* Lebar maksimum */
}

        th {
            background-color: #f2f2f2;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .my-3 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        thead {
            display: table-header-group;
            /* Menampilkan header tabel pada setiap halaman */
        }

        tbody tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        /* Atur lebar kolom menggunakan CSS */
        .narrow-column th,
        .narrow-column td {
            /* Hindari teks membungkus */
            word-wrap: break-word;
            /* Membungkus kata yang panjang */
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
                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/image2.png'))) }}" class="app-image-style" style="height: 90px;" />
                        </div>
                    </td>
                    <td style="text-align: center; border: none;">
                        <div class="address">
                            <h1>MUSEUM BRAWIJAYA<br>Jl. Besar Ijen No.25A, Gading Kasri, Kec. Klojen,<br>Kota Malang, Jawa Timur 65115</h1>
                        </div>
                    </td>
                    <td style="text-align: right; border: none;">
                        <div>
                            @php
                            $img = asset('gambar/image1.png');
                            $base_64 = base64_encode($img);
                            $img = 'data:image/png;base64,' . $base_64;
                            @endphp
                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/image1.png'))) }}" class="app-image-style" style="height: 90px;" />
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </header>
    <br>
    <div class="table-responsive">
        <table class="narrow-column">
            <thead>
                <tr>
                    <th>Nomor Inventaris</th>
                    <th>Nomor Registrasi</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Edisi</th>
                    <th>Tahun Terbit</th>
                    <th>ISSN</th>
                    <th>Penerbit</th>
                    <th>Tempat Terbit</th>
                    <th>Kualifikasi</th>
                    <th>Abstrak</th>
                    <th>Bahasa</th>
                    <th>Subjek</th>
                </tr>
            </thead>
            <tbody>
                @foreach($koleksibuku as $buku)
                <tr>
                    <td>{{ $buku->nomorkoleksibuku->no_inventaris_buku }}</td>
                    <td>{{ $buku->nomorkoleksibuku->no_registrasi_buku }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->edisi }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>{{ $buku->issn }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tempat_terbit }}</td>
                    <td>{{ $buku->kualifikasi }}</td>
                    <td>{{ $buku->abstrak }}</td>
                    <td>{{ $buku->bahasa }}</td>
                    <td>{{ $buku->subjek }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
