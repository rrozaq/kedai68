<?php require_once '../system/core/init.php';
$id = $_GET['id'];
if ($id == null) {
  header('location:category');
}

delete_category($id);
header('location:category');
