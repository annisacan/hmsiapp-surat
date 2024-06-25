<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('public/sidebar-01/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/sidebar-02/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/sidebar-03/assets/css/style.css') }}">

    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Boxicons CSS -->
    <link href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">


</head>

<body>

    <body>
        <div class="sidebar close">
            <!-- ========== Logo ============  -->
            <a href="#" class="logo-box">
                <i class='bx bxs-graduation'></i>
                <div class="logo-name">HMSI Surat App</div>
            </a>

            <!-- ========== List ============  -->
            <ul class="sidebar-list">
                <!-- -------- Non Dropdown List Item ------- -->
                <li>
                    <div class="title">
                        <a href="{{ route('dashboardbend') }}" class="link">
                            <i class='bx bx-pie-chart-alt-2'></i>
                            <span class="name">Dashboard</span>
                        </a>
                        <!-- <i class='bx bxs-chevron-down'></i> -->
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Dashboard</a>
                        <!-- submenu links here  -->
                    </div>
                </li>

                {{-- Salsa --}}
                <!-- -------- Non Dropdown List Item ------- -->
                <li>
                    <div class="title">
                        <a href="{{ route('DanaMasuk') }}" class="link">
                            <i class='bx bx-file'></i>
                            <span class="name">Dana Masuk</span>
                        </a>
                </li>

                {{-- Salsa --}}
                <!-- -------- Non Dropdown List Item ------- -->
                <li>
                    <div class="title">
                        <a href="{{ route('LaporanDana') }}" class="link">
                            <i class='bx bx-money'></i>
                            <span class="name">Laporan Dana</span>
                        </a>
                </li>

                <!-- -------- Non Dropdown List Item ------- -->
                <li>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Settings</a>
                        <!-- submenu links here  -->
                    </div>
                </li>
            </ul>
        </div>


        <!-- ============= Home Section =============== -->
        <section class="home">
            <div class="topbar">
                <div class="toggle-sidebar">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="row">
                    <div class="bell mr-2">
                        <i class='bx bxs-bell' ></i>
                    </div>
                    <div class="user">
                        <img src="assets/imgs/customer01.jpg" alt="">
                    </div>
                </div>
            </div>

            {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">
                        {{ $errors }}
                    </p>
                @endforeach
            @endif --}}

            @yield('content')
        </section>

        <script src="{{ asset('public/sidebar-01/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/sidebar-01/js/popper.js') }}"></script>
        <script src="{{ asset('public/sidebar-01/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/sidebar-01/js/main.js') }}"></script>
        <script src="{{ asset('public/sidebar-02/assets/js/main.js') }}"></script>




    </body>

</body>

</html>
