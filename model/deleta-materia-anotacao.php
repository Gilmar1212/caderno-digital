<?php 
include_once("../connect.php");
include_once("fetch-query.php");
$id = filter_input(INPUT_GET,"id");

$fetch_id_materia = fetch_query($conn->query("SELECT id_materia FROM tbl_materias"));
$fetch_id_anotacoes = fetch_query($conn->query("SELECT id_materia FROM tbl_anotacoes"));
try{
    header("Location: ../index.php");
    foreach($fetch_id_materia as $fetch=> $id_materia){
        if($id == $id_materia["id_materia"]){

            $delete_materia = $conn;
            
            $delete_materia->query("DELETE FROM tbl_materias WHERE id_materia = {$id}");
            
        }
    }
    foreach($fetch_id_anotacoes as $fetch=> $id_anotacoes){
        if(isset($id_anotacoes["id_anotacoes"]) == $id){
            $delete_anotacoes = $conn;
            $delete_anotacoes->query("DELETE FROM tbl_anotacoes WHERE id_materia = {$id}");
        }           
    }
}catch(Exception $e){
    echo "Não foi possivel deletar, ".$e->getMessage()." Codigo ".$e->getCode();
}



?>