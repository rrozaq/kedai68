<?php
    require_once 'db.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $login    = mysqli_query($link,"SELECT * FROM users where username = '$username' AND password='$password'");
    $result   = mysqli_num_rows($login);
    if ($result > 0) {
      $user = mysqli_fetch_array($login);
      session_start();
      $_SESSION['login'] = $username;
      header('location:dashboard/index.php');
    }else {
      header('location:index.php');
     }
 ?>
