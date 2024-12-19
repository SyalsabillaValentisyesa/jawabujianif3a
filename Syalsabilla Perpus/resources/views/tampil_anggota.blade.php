<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menampilkan Data Anggota Perpustakaan</title>
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
        h3 {
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
    </style>
</head>
<body>

    <div class="container">
        <h3 class="mb-3">DATA ANGGOTA PERPUSTAKAAN</h3>
        <h3>---------------------------------</h3>
        <table border="1" cellpadding="10">
            <tr>
                <th>NO ANGGOTA</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>JURUSAN</th>
            </tr>
            <div class="row">
                <div class="m-auto">
                    @forelse ($anggotas as $anggota)
                    <tr>
                        <td>{{ $anggota->noanggotas }}</td>
                        <td>{{ $anggota->nama }}</td>
                        <td>{{ $anggota->alamat }}</td>
                        <td>{{ $anggota->jurusan }}</td>
                    </tr>
                    @empty
                        <div class="alert align-dark d-line-block">TIDAK ADA DATA </div>
                    @endforelse
                </div>
            </div>
        </table>
    </div>
    
</body>
</html>