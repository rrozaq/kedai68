<?php
require_once('../db.php');
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];

  $query = "INSERT INTO siswa (nama_siswa,alamat) VALUE('$nama','$alamat')";
  $result = mysqli_query($link,$query);

  if ($result) {
    header('location:tables.php');
  }else{
    header('location:tambah.php');
  }

 ?>
