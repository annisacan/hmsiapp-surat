<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>Surat HMSI</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/sidebar-01/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/sidebar-02/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/sidebar-03/assets/css/style.css') }}">

    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
                    <a href="{{ route('dashboard') }}" class="link">
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

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-envelope'></i>
                        <span class="name">Surat</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Surat</a>
                    <a href="#" class="link">Request Surat</a>
                    <a href="#" class="link">Surat Masuk</a>
                    <a href="#" class="link">Kirim Surat</a>
                    <a href="#" class="link">Arsip Surat</a>
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bxs-user-rectangle'></i>
                        <span class="name">Kelola User</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Users Aplikasi</a>
                    <a href="{{ route('KelolaUsers') }}" class="link">Kelola User</a>
                    <a href="{{ route('KelolaDivisi') }}" class="link">Role User</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">Settings</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Settings</a>
                    <a href="#" class="link submenu-title">Profile</a>
                    <a href="{{ route('logout') }}" class="link submenu-title"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
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
                <div class="text">Toggle</div>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="row">
                <div class="bell mr-2">
                    <i class='bx bxs-bell'></i>
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

</html>
