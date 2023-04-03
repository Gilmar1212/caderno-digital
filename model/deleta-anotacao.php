<?php 
    include_once("../connect.php");
    try{
        $id = filter_input(INPUT_GET,"id");

        $query_anotacoes = $conn->query("SELECT * FROM tbl_anotacoes");
        $fetch_id_anotacoes = $query_anotacoes->fetchAll();
        $delete_anotacoes = $conn;
        foreach($fetch_id_anotacoes as $fetch=> $id_anotacoes){
            var_dump($id);
        if($id == $id_anotacoes['id_anotacoes']){
                $delete_anotacoes->query("DELETE FROM tbl_anotacoes WHERE id_anotacoes = {$id}");
                header("Location: ../view/topicos-materia.php?id=".$id_anotacoes['id_materia']);
            }
        }       
    }catch(Exception $e){
        echo "Não foi possivel deletar, ".$e->getMessage()." Codigo ".$e->getCode();
    }
    
    
    
?>