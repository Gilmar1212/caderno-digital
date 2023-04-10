
<?php 
include_once("model-cria-json.php");
$spit = json_spit($conn->prepare("SELECT * FROM tbl_anotacoes ORDER BY id_anotacoes"));
?>