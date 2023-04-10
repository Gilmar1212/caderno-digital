<?php 
include_once("../connect.php");
   function json_spit($query){
  $query_array_fetch = $query;
  $query_array_fetch->execute();
  $result = $query_array_fetch->fetchAll();
  return print_r($array[] = json_encode($result));
  }
?>