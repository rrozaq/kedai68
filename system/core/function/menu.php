<?php


 function add_category($name){
    $query = "INSERT INTO kategori (nama_kategori) VALUES('$name')";
    return run($query);
 }

 function getcategory(){
   $query = "SELECT * FROM kategori";
   return run($query);
 }
