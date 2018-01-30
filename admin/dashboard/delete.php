<?php require_once '../db.php';

$id  = $_GET['id'];

$query="DELETE FROM siswa Where id_siswa =$id";
$result = mysqli_query($link,$query);

if ($result) {
header('location:tables.php');
}else {
  echo "gagal harap di perbaikin";
}
