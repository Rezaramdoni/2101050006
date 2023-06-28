<?php
    include('koneksi.php');
    $id =$_GET['id'];
    $query ="DELETE FROM matakuliah WHERE id=$id";
    $result = mysqli_query($connect,$query);
    header("location:tampil.php");

?>