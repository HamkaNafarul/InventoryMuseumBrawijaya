<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Museum Brawijaya Malang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('asset/css/surat.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('{{ asset('gambar/bg5.png') }}');
            background-size: cover;
            background-position: center;
        }
    </style>

    <div class="row">
        <div class="col-lg-5" style="background-color: #5347D8;padding: 30px;">
            <div class="navigation-buttons">
                <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
                <a href="surat" class="btn btn-primary">Surat Observasi/Kunjungan</a>
            </div>
            
            <h3 class="poppins-text-bold">
                Isikan Formulir Berikut Jika Ingin Melakukan Kunjungan atau<br> Observasi
            </h3>
            <p style="color: white;">Kontak</p>
            <div class="row">
                <div class="col-sm-1">
                    <img src="gambar/building.png">
                </div>
                <div class="col-sm-6">
                    <small style="color: white;">Jl. Idjen Gading Asri<br>Kota Malang</small>
                </div>
            </div>
            <div class="row" style="padding-bottom: 2%;">
                <div class="col-sm-1">
                    <img src="gambar/telephone.png">
                </div>
                <div class="col-sm-6">
                    <small style="color: white;">62-6545-2041</small>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <img src="gambar/mail.png">
                </div>
                <div class="col-sm-6">
                    <small style="color: white;">museumbrawijaya@gmail.com</small>
                </div>
            </div>
            <br>
            <p style="color: white;">Social Media</p>
            <div class="row">
                <div class="col-sm-1">
                    <img src="gambar/facebook.png">
                </div>
                <div class="col-sm-1">
                    <img src="gambar/twitter.png">
                </div>
                <div class="col-sm-1">
                    <img src="gambar/instagram.png">
                </div>
                <div class="col-sm-1">
                    <small style="color: white;">MuseumBrawijaya</small>
                </div>
            </div>
            <div style="min-width: 520px;height: 340px;background-color: white;margin-top: 2%;">
                <div style="padding: 20px;">
                    <p>Perhatikan untuk tanggal kunjungan/observasi yang sudah penuh</p>
                </div>
                <div style="width: 408px;height: 214px;background-color: #C4C4C4;margin-left: 10%;">
                    <div
                        style="display: flex;flex-direction: row;gap: 50px;padding: 20px;border-bottom: 1px solid black;padding-bottom: 2px;">
                        <h4>MM-DD-YYYY</h4>
                        <button class="btn btn-danger" style="height: 30px;width: 150px;padding: 2px;border-radius: 0;">
                            <b>Penuh</b>
                        </button>
                    </div>
                    <div
                        style="display: flex;flex-direction: row;gap: 50px;padding: 20px;border-bottom: 1px solid black;padding-bottom: 2px;">
                        <h4>MM-DD-YYYY</h4>
                        <button class="btn btn-danger" style="height: 30px;width: 150px;padding: 2px;border-radius: 0;">
                            <b>Penuh</b>
                        </button>
                    </div>
                    <div
                        style="display: flex;flex-direction: row;gap: 50px;padding: 20px;border-bottom: 1px solid black;padding-bottom: 2px;">
                        <h4>MM-DD-YYYY</h4>
                        <button class="btn btn-danger" style="height: 30px;width: 150px;padding: 2px;border-radius: 0;">
                            <b>Penuh</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7" style="padding: 20px;height: 200px;">
            <h2 class="poppins-text-bold" style="color: #ffffff;text-align: center;margin-top: 7%;margin-bottom: 7%;">
                Form Surat
            </h2>
            <form action="{{ route('store_surat') }}" method="POST" role="form"
                enctype="multipart/form-data">
                @csrf
                <div style="display: flex; flex-direction: column; gap: 20px; margin-left: 20%; margin-right: 20%;">
                    <input type="text" class="form-control" name="nama" placeholder="Nama"
                        style="background-color: #C4C4C4;min-height: 55px;">
                    <input type="text" class="form-control" name="nomor_hp" placeholder="Nomor HP"
                        style="background-color: #C4C4C4;min-height: 55px;">
                    <input type="text" class="form-control" name="asal_intansi" placeholder="Asal Instansi"
                        style="background-color: #C4C4C4;min-height: 55px;">
                    <input type="date" class="form-control" name="tanggal"
                        style="background-color: #C4C4C4;min-height: 55px">
                    <input type="text" class="form-control" name="agenda" placeholder="Agenda"
                        style="background-color: #C4C4C4;min-height: 55px;">
                    <input type="file" class="form-control" name="file"
                        style="background-color: #C4C4C4;min-height: 48px;padding: 30px;">
                    <div class="col-md-12" style="padding-top: 10%;">
                        <button type="submit" class="btn-custom">KIRIM</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
