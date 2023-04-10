<?php 
    include("../connect.php");
    include("fetch-query.php");
    try{
        $id = filter_input(INPUT_GET,"id");
        $fetch_id_anotacoes = fetch_query($conn->query("SELECT * FROM tbl_anotacoes"));
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