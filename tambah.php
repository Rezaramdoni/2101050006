<?php
include('koneksi.php'   );
if (isset($_GET['btnSimpan'])) {
    # code...
    $nama = $_GET['txtNama'];
    $semester = $_GET['txtsemester'];
    $sks_teori = $_GET['txtsks_teori'];
    $sks_praktikum = $_GET['txtsks_praktikum'];
    $jurusan = $_GET['txtjurusan'];

    echo 'Nama :' . $nama;
    $query="INSERT INTO matakuliah (nama,semester,sks_teori,sks_praktikum,jurusan) VALUES('$nama','$semester','$sks_teori','$sks_praktikum','$jurusan')";
    $sql=mysqli_query($connect, $query);

    if (!$sql) {
        # code...
        echo 'tidak berhasil';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <a href="tampil.php">Tampil</a>
    <form action="" method="get">
        <label for="nama">Nama</label>
        <input type="text" name="txtNama" id="nama">
        <br>
        <label for="semester">Semester</label>
        <input type="text"name="txtsemester" id="semester">
        <br>
        <label for="sks_teori">SKS teori</label>
        <input type="text" name="txtsks_teori" id="sks_teori">
        <br>
        <label for="sks_praktikum">SKS praktikum</label>
        <input type="text" name="txtsks_praktikum" id="sks_praktikum">
        <br>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="txtjurusan" id="jurusan" >
        <br>
        <button type="submit" name="btnSimpan">Simpan</button>
    </form>
</body>
</html>