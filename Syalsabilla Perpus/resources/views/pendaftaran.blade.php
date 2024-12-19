<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Pendaftaran Anggota Perpustakaan</title>
</head>
<body>
  <form action="{{url('/prosesfrom')}}" method="POST">
  <h1>Form Pendaftaran Anggota Perpustakaan</h1>
    <h2>=====================================</h2>
    <P>
      <label>No Anggota</label>
      <input type="text" name="nomor" placeholder="Nomor Anggota"></p>
    <P>
      <label>Nama Anggota</label>
      <input type="text" name="nama" placeholder="Nama Anggota"></p>
    <P>
      <label>Alamat</label>
      <input type="text" name="alamat" placeholder="Alamat..."></p>
    <P>
      <label>Jurusan</label>
      <input type="text" name="jurusan" placeholder="Jurusan..."></p>
    <P>
      <label>TGL Daftar</label>
      <input type="date" name="tgl" placeholder="Tanggal daftar..."></p>
    <p>
      <label>Nomor Telpon</label>
      <input type="text" name="notel" placeholder="Nomor Telpon...."></p>
    <p>
      <button type="submit" name="Submit" value="DAFTAR">DAFTAR</button>
      <button type="button" name="Cancel" value="CANCEL">CANCEL</button>           
  </form>
</body>
</html>