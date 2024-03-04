<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('asset/css/login.css') }}" rel="stylesheet">
</head>
</head>

<body class="hold-transition login-page" style="background-color: #5347D8;">


    
    <div class="col-lg-12" align="center" style="padding-top: 10%;">
      
  </div>
  

    <div class="wrapper">
      <div class="alert">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        </ul>
    </div>
      <h1><b style="color: white;">SELAMAT DATANG</b></h1>
        <h3><b style="color: white;">INVENTARIS MUSEUM BRAWIJAYA MALANG</b></h3>
    
      <h1>
        <div class="col-sm-12">
            <img style="width: 56px;height: 57px;" src="gambar/image1.png">
            <img style="height: 57px" src="gambar/line.png">
            <img style="width: 56px;height: 57px;" src="gambar/image2.png">
        </div>
    </h1>

        <form method="POST" action="{{ route('login_proses') }}">
            @csrf
            <div class="input-box">
                <input type="email" values="{{old ('email') }}" name="email" class="form-control" placeholder="Email"
                    required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" values="{{('password') }}" name="password" class="form-control"
                    placeholder="Pasword" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Login</button>

        </form>
    </div>
</body>

</html>
