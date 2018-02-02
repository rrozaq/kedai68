<?php


 function add_category($name){
    $query = "INSERT INTO kategori (nama_kategori) VALUES('$name')";
    return run($query);
 }

 function getcategory(){
   $query = "SELECT * FROM kategori";
   return run($query);
 }

 function percategory($id){
   $query = "SELECT * FROM kategori WHERE id_kategori = $id";
   return run($query);
 }

 function edit_category($name,$id){
   $query = "UPDATE kategori SET nama_kategori='$name' WHERE id_kategori=$id";
   return run($query);
 }

 function delete_category($id){
   $query = "DELETE FROM kategori WHERE id_kategori = $id";
   return run($query);
 }
