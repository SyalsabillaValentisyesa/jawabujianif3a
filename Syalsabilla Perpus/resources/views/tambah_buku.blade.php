<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
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
            max-width: 600px;
            margin-top: 50px;
        }
        h2 {
            color: #e52020; /* Warna teks judul */
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            color: #e52020; /* Warna teks label */
            font-weight: bold;
        }
        .btn {
            background-color: #e52020; /* Tombol warna pink */
            color: white;
        }
        .btn:hover {
            background-color: #ff66b2; /* Warna tombol saat hover */
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
<body>
    <h2>Tambah Buku</h2>
    <form action="{{ url('/buku/prosestambah') }}" method="POST">
        @csrf
       <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" maxlength="255" required><br><br>

        <label for="penerbit">Penerbit:</label><br>
        <input type="text" id="penerbit" name="penerbit" maxlength="100" required><br><br>

        <label for="penulis">Penulis:</label><br>
        <input type="text" id="penulis" name="penulis" maxlength="100" required><br><br>

        <label for="tahun_terbit">Tahun Terbit:</label><br>
        <input type="number" id="tahun_terbit" name="tahun_terbit" min="1900" max="{{ date('Y') }}" required><br><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
