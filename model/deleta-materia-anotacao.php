<?php 
    include_once("../connect.php");
    $id = filter_input(INPUT_GET,"id");
    var_dump($id);
    $query_materia = $conn->query("SELECT id_materia FROM tbl_materias");
    $query_anotacoes = $conn->query("SELECT id_materia FROM tbl_anotacoes");

    $fetch_id_materia = $query_materia->fetchAll();
    $fetch_id_anotacoes = $query_anotacoes->fetchAll();
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