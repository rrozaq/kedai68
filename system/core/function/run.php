<?php

function run($query){
  global $link;
  $result = mysqli_query($link,$query);
  return $result;
}
