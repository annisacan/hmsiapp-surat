<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Surat HMSI</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('sidebar-01/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('sidebar-02/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('sidebar-03/assets/css/style.css') }}">

    <link rel="icon" href="{{ asset('hmsi.png') }}" type="image/png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <link rel="shortcut icon" href="{{ asset('/admin/assets/img/illustrations/logo_kksp_surat.png') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="sidebar close">
        <a href="#" class="logo-box">
            <i class='bx bxs-graduation'></i>
            <div class="logo-name">HMSI Surat App</div>
        </a>

        <ul class="sidebar-list">
            <li>
                <div class="title">
                    <a href="{{ route('dashboardsekre') }}" class="link">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="name">Dashboard</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Dashboard</a>
                </div>
            </li>

            @can('sekretaris')
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
                        <a href="{{ route('RequestSurat') }}" class="link">Request Surat</a>
                        <a href="{{ route('SuratMasukSekre') }}" class="link">Surat Masuk</a>
                        <a href="{{ route('BuatSurat') }}" class="link">BuatSurat</a>
                        <a href="{{ route('ArsipSuratSekre') }}" class="link">Arsip Surat</a>
                    </div>
                </li>
                <li class="dropdown">
                    <div class="title">
                        <a href="#" class="link">
                            <i class='bx bxs-user-rectangle'></i>
                            <span class="name">Management</span>
                        </a>
                        <i class='bx bxs-chevron-down'></i>
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Management Aplikasi</a>
                        <a href="{{ route('KelolaUsers') }}" class="link">Kelola User</a>
                        {{-- <a href="{{ route('KelolaDivisi') }}" class="link">Divisi User</a> --}}
                    </div>
                </li>
            @endcan

            @can('bendahara')
                <li>
                    <div class="title">
                        <a href="{{ route('DanaMasuk') }}" class="link">
                            <i class='bx bx-money'></i>
                            <span class="name">Dana Masuk</span>
                        </a>
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Dana Masuk</a>
                    </div>
                </li>

                <li>
                    <div class="title">
                        <a href="{{ route('LaporanDana') }}" class="link">
                            <i class='bx bx-file'></i>
                            <span class="name">Laporan Dana</span>
                        </a>
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Laporan Dana</a>
                    </div>
                </li>
            @endcan

            @can('anggota')
                <li>
                    <div class="title">
                        <a href="{{ route('ReqSurat') }}" class="link">
                            <i class='bx bx-file'></i>
                            <span class="name">Request Surat</span>
                        </a>
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Request Surat</a>
                    </div>
                </li>

                <li>
                    <div class="title">
                        <a href="{{ route('AjuanDana') }}" class="link">
                            <i class='bx bx-money'></i>
                            <span class="name">Ajuan Dana</span>
                        </a>
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Ajuan Dana</a>
                    </div>
                </li>

                <li>
                    <div class="title">
                        <a href="{{ route('KirimSurat') }}" class="link">
                            <i class='bx bx-upload'></i>
                            <span class="name">Kirim Surat</span>
                        </a>
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Kirim Surat</a>
                    </div>
                </li>
            @endcan

            @can('kahim')
                <li>
                    <div class="title">
                        <a href="{{ route('SuratMasukKahim') }}" class="link">
                            <i class='bx bx-file'></i>
                            <span class="name">Surat Masuk</span>
                        </a>
                        <!-- <i class='bx bxs-chevron-down'></i> -->
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Surat Masuk</a>
                        <!-- submenu links here  -->
                    </div>
                </li>
            @endcan
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">Settings</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Settings</a>
                    <a href="{{ route('Profile') }}" class="link">Profile</a>
                    <a href="{{ route('logout') }}" class="link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    <!-- submenu links here  -->
                </div>

            </li>
            <!-- contoh kahim -->
            <!-- -------- Non Dropdown List Item ------- -->

        </ul>
    </div>
    <!-- -------- Non Dropdown List Item ------- -->

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
                {{-- <div class="bell mr-2">
                    <i class='bx bxs-bell'></i>
                </div> --}}
                <div class="user">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar"
                            class="img-thumbnail">
                    @else
                        <img src="{{ asset('storage/avatars/default-avatar.jpg') }}" alt="Default Avatar"
                            class="img-thumbnail">
                    @endif
                </div>
            </div>
        </div>
        @yield('content')
    </section>

    <script src="{{ asset('sidebar-01/js/jquery.min.js') }}"></script>
    <script src="{{ asset('sidebar-01/js/popper.js') }}"></script>
    <script src="{{ asset('sidebar-01/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sidebar-01/js/main.js') }}"></script>
    <script src="{{ asset('sidebar-02/assets/js/main.js') }}"></script>
    {{-- 
    @stack('prepend-script')
    <script src="{{ url('/admin/js/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('/admin/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="{{ url('/admin/js/litepicker.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
    {{-- <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> --}}
    @stack('prepend-script')
    <script src="{{ url('/admin/js/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('/admin/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="{{ url('/admin/js/litepicker.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
    @stack('addon-script')
    @stack('alert-script')
    @stack('sidenav-script')
</body>

</body>

</html>
