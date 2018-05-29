<?php
function add_testi($name,$country,$pesan,$file){
  $query = "INSERT INTO testi (name,country,pesan,img) VALUES('$name','$country','$pesan','$file')";
  return run($query);
}
function gettesti(){
  $query = "SELECT * FROM testi ORDER BY create_at desc Limit 20";
  return run($query);
}

 ?>
