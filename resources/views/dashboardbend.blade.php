@extends('layout.masterbend')

@section('content')
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
    <div class="card">
            <div class="card-body">
                <!-- Tambahkan elemen untuk menampilkan grafik -->
                <canvas id="chartTotalPengeluaranPerBulan"></canvas>
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

@endsection
