<?php

function check_user($user){
  $query = "SELECT username FROM users Where username = '$user'";
  $data =  run($query);
  if (mysqli_num_rows($data)>0) {
    return true;
  }else {
    return false;
  }
}

function login($user,$pass){
  global $link;
  $query = "SELECT * FROM users Where username = '$user'";
  $data =  run($query);

  $data = mysqli_fetch_assoc($data);
  $pass = mysqli_real_escape_string($link,$pass);

  if (password_verify($pass,$data['password'])) {
    return true;
  }else {
    return false;
  }

}

//untuk mengambil data users
function getprofile($user){
  $query = "SELECT * FROM users WHERE username = '$user'";
  return run($query);
}
