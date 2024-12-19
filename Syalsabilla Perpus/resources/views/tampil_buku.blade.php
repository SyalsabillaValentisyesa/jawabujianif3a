<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8d1e0; /* Warna latar belakang pink */
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            color: #e52020; /* Warna teks judul */
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #e52020;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #e52020;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .alert {
            color: #e52020;
            text-align: center;
            margin-top: 20px;
        }
        .success-message {
            color: green;
            margin-bottom: 10px;
            text-align: center;
        }
        .action-link {
            color: #e52020;
            text-decoration: none;
            font-weight: bold;
        }
        .action-link:hover {
            color: #ff6600;
        }
    </style>
</head>
<body>
    <h2>Data Buku</h2>

    @if (session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>ID </th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        @forelse ($buku as $b)
            <tr>
                <td>{{ $b->id}}</td>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->penerbit }}</td>
                <td>{{ $b->penulis }}</td>
                <td>{{ $b->tahun_terbit }}</td>
                <td>
                    <a href="{{ url('/buku/hapus/' . $b->id) }}" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Tidak ada data buku.</td>
            </tr>
        @endforelse
    </table>
</body>
</html>
