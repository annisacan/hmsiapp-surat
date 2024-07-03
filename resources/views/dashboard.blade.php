@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4 text-center mt-5"> WELCOME TO SURAT MENYURAT HMSI</h1>
        @can('bendahara')
            @php
                $totalPengeluaran = DB::table('ajuan_danas')->sum('total_pengeluaran');
                $formattedTotal = number_format($totalPengeluaran, 0, ',', '.');

                // Ambil data total pengeluaran per bulan dari database
                $totalPengeluaranPerBulan = DB::table('ajuan_danas')
                    ->select(DB::raw('MONTH(created_at) as bulan'), DB::raw('SUM(total_pengeluaran) as total'))
                    ->groupBy(DB::raw('MONTH(created_at)'))
                    ->orderBy('bulan', 'ASC')
                    ->get();

                // Buat array untuk menyimpan data bulan dan total pengeluaran
                $labels = [];
                $data = [];
                foreach ($totalPengeluaranPerBulan as $item) {
                    $labels[] = \Carbon\Carbon::createFromDate(null, $item->bulan, null)->format('F');
                    $data[] = $item->total;
                }
            @endphp

            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="cardBox">
                            <div class="card">
                                <div>
                                    <div class="numbers">Rp {{ $formattedTotal }}</div>
                                    <div class="cardName">Total Pengeluaran</div>
                                </div>
                                <div class="iconBx">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <!-- Tambahkan elemen untuk menampilkan grafik -->
                                <canvas id="chartTotalPengeluaranPerBulan"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Script untuk membuat grafik menggunakan Chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                var ctx = document.getElementById('chartTotalPengeluaranPerBulan').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: @json($labels),
                        datasets: [{
                            label: 'Total Pengeluaran per Bulan',
                            data: @json($data),
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        @endcan
    </div>

    <!-- Page Heading -->
    {{-- <div class="d-sm-flex align-items-center justify-content-between ml-4">
            <h1 class="mb-3 text-gray-800">Dashboard</h1>
        </div> --}}

    <!-- Content Row -->
    {{-- 
    <div class="cardBox">

        <div class="card">
            <div>
                <div class="numbers">1,504</div>
                <div class="cardName">Daily Views</div>
            </div>

            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">80</div>
                <div class="cardName">Sales</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">284</div>
                <div class="cardName">Comments</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">$7,842</div>
                <div class="cardName">Earning</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>


    </div> --}}
@endsection
{{-- <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 mb-3" style="background-color: #FE9410;">
                        <h6 class="m-0 font-weight-bold text-white">Total Pengeluaran Divisi</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="SalesAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="row-xl-4 mb-3">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1"
                                        style="color: rgb(0, 225, 255)">
                                        Request Surat</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalPS">Loading...</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-xl-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1"
                                        style="color: rgb(255, 77, 0)">
                                        Ajuan Dana</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalPS">Loading...</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
