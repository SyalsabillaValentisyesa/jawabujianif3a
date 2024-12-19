<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8d1e0; 
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-top: 50px;
        }
        h2 {
            color: #e52020; 
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            color: #e52020; 
            font-weight: bold;
        }
        .btn {
            background-color: #e52020; 
            color: white;
        }
        .btn:hover {
            background-color: #ff66b2; 
        }
        .form-control {
            border: 2px solid #e52020;
            border-radius: 5px;
        }
        .form-control:focus {
            border-color: #ff66b2;
            box-shadow: 0 0 5px rgba(255, 102, 178, 0.5);
        }
        .container input {
            margin-bottom: 10px;
        }
    </style>
</head>
</head>
<body>
    <h2>Tambah Anggota</h2>
    <form action="{{ url('/anggota/prosestambah') }}" method="POST">
        @csrf
        <label for="noanggota">No Anggota:</label><br>
        <input type="text" id="noanggota" name="noanggota" maxlength="8" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" maxlength="100" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" maxlength="255" required><br><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan" maxlength="50" required><br><br>

        <label for="tgl">Tanggal Masuk:</label><br>
        <input type="date" id="tgl" name="tgl" required><br><br>

        <label for="notelp">No Telepon:</label><br>
        <input type="text" id="notelp" name="notelp" maxlength="15" required><br><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
