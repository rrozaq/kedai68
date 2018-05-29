<?php
require_once 'system/core/init.php';
$nama = $_POST['name'];
$country = $_POST['country'];
$pesan= $_POST['pesan'];

$folder = "assets/testi/";
$temp = $_FILES['foto']['tmp_name'];;
$name_file = $_FILES['foto']['name'];;
$imageFileType = strtolower(pathinfo($name_file,PATHINFO_EXTENSION));
if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
  if (move_uploaded_file($temp,$folder.$name_file)) {
    if (add_testi($nama,$country,$pesan,$name_file)) {
          echo "good";
    }else {
      echo "sorry, there is a system error, please contact the administrator";
    }
  }else {
    echo "Photos can not be uploaded";
  }
}else {
echo "the image must be in JPG, PNG, or JPEG format";
}

 ?>
