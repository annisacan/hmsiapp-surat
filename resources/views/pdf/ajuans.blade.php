<!DOCTYPE html>
<html>
<head>
    <title>Laporan Dana</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Laporan Dana</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Divisi</th>
                <th>Perihal</th>
                <th>Tanggal Ajuan</th>
                <th>Dana</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ajuans as $ajuan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ajuan->divisi ?? 'N/A' }}</td>
                <td>{{ $ajuan->nama_dana }}</td>
                <td>{{ $ajuan->created_at->format('Y-m-d') }}</td>
                <td>{{ $ajuan->total_pengeluaran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
