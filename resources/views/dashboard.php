<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Dashboard</title>
    <style>
        body {
           font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }


        .sidebar {
            background-color: #474242;
            width: 300px;
            padding: 20px;
            float: left;
            height: 100vh;
        }

        .content {
            /*margin-left: 250px;*/
            padding: 20px;
            background-color: #5347D8;
        }

        /* Style untuk link sidebar */
        .sidebar a {
            display: block;
            padding: 10px 0;
            color: white;
            text-decoration: none;
            margin-right: -10%;
            margin-left: -10%;
            padding-left: 20px;
        }

        /* Style untuk link aktif */
        .sidebar a.active {
            background-color: #5347D8;
            color: white;
            margin-right: -10%;
            margin-left: -10%;
            padding-left: 20px;
        }

          .header {
            background-color: #D9D9D9;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .profile-dropdown {
            position: relative;
            display: inline-block;
        }

        .profile-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1;
        }

        .profile-dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .profile-dropdown-content a:hover {
            background-color: #ddd;
        }

        .profile-dropdown:hover .profile-dropdown-content {
            display: block;
        }

        .profile-img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-left: 10px;
        }

        /* Hide the default profile image */
        img.default-profile {
            display: none;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-lg-2">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <h2 style="color: white;">Inventaris Museum</h2>
            </div>
            <a href="href={{ URL::to('/') }}/dashboard" class="active"><i class="fa fa-home"></i> Dashboard</a>
            <a href="href={{ URL::to('/') }}/dashboard/koleksi"><i class="fa fa-file"></i> Koleksi Pameran</a>
            <a href="href={{ URL::to('/') }}/dashboard/katalog"><i class="fa fa-file"></i> Katalog Buku Perpus</a>
            <a href="href={{ URL::to('/') }}/dashboard/surat"><i class="fa fa-file"></i> Surat</a>
            <a href="href={{ URL::to('/') }}/dashboard/admin"><i class="fa fa-file"></i> Admin</a>
            <!-- Tambahkan link tambahan untuk menu sidebar -->
        </div>
    </div>
    <div class="col-lg-10">
        <div class="header">
            <div class="profile-dropdown">
                <img src="href={{ URL::to('/') }}gambar/image2.png" alt="Profile" class="profile-img">
                <img src="href={{ URL::to('/') }}gambar/image2.png" alt="Profile" class="profile-img default-profile">
                <div class="profile-dropdown-content">
                    <a href="#">Profile</a>
                    <a href="#">Keluar</a>
                </div>
            </div>
        </div>
        <div class="content" style="min-height: 640px;">
            <div class="container" >
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;min-height: 130px;">
                          <div class="card-body">
                            <h5 class="card-title">Koleksi Pameran</h5>
                            <h2 style="padding-top: 5%;" align="right">56</h2>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;min-height: 130px;">
                          <div class="card-body">
                            <h5 class="card-title">Katalog Buku Perpustakaan</h5>
                            <h2  align="right">56</h2>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;min-height: 130px;">
                          <div class="card-body">
                            <h5 class="card-title">Surat Masuk</h5>
                            <h2 style="padding-top: 5%;" align="right">56</h2>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>