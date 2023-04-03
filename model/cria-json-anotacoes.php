<?php 
include_once("../connect.php");
  $query_array_fetch = $conn->prepare("SELECT * FROM tbl_anotacoes ORDER BY id_anotacoes");
  $query_array_fetch->execute();

  $result = $query_array_fetch->fetchAll();
  $array = [];
  print_r($array[] = json_encode($result));
?>