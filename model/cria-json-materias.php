<?php 
include_once("../connect.php");
  $query_array_fetch = $conn->prepare("SELECT * FROM tbl_materias ORDER BY materias");
  $query_array_fetch->execute();

  $result = $query_array_fetch->fetchAll();
  print_r(json_encode($result));
?>