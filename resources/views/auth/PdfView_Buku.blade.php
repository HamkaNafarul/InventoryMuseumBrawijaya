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
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #f2f2f2;
            height: 100px;
            padding: 20px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 120px; /* Sesuaikan dengan tinggi header */
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .my-3 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="address">
            Alamat Museum Brawijaya Malang<br>
            Jalan Museum No. 1, Kota Malang, Indonesia<br>
            Telepon: (123) 456-7890 | Email: info@museum.com
        </div>
    </header>
    <h1 class="my-3">Katalog Buku Museum Brawijaya Malang</h1>
    <table>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Edisi</th>
            <th>Tahun Terbit</th>
            <th>ISSN</th>
            <th>Penerbit</th>
            <th>Tempat Terbit</th>
            <th>Kualifikasi</th>
            <th>Bahasa</th>
            <th>Subjek</th>
        </tr>
        @foreach($koleksibuku as $buku)
        <tr>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->pengarang }}</td>
            <td>{{ $buku->edisi }}</td>
            <td>{{ $buku->tahun_terbit }}</td>
            <td>{{ $buku->issn }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td>{{ $buku->tempat_terbit }}</td>
            <td>{{ $buku->kualifikasi }}</td>
            <td>{{ $buku->bahasa }}</td>
            <td>{{ $buku->subjek }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
