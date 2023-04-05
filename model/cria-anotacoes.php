<?php
    include_once("../connect.php");
 
    try{
    
    $id =filter_input(INPUT_GET , "id");
    $assunto = $_POST['assunto-materia'];
    $anotacoes = $_POST['anotacoes'];
    $select_materia = $conn->query("SELECT id_materia FROM tbl_materias");
    $fetch_materia = $select_materia->fetchAll();
    foreach($fetch_materia as $fetch =>$id_materia){
        if($id == $id_materia['id_materia']){
            $insert = $conn->prepare("INSERT INTO tbl_anotacoes(assunto_anotacoes, anotacoes, id_materia) VALUES (:assunto_anotacoes, :anotacoes, :id_materia)");        
            $insert->bindValue(":assunto_anotacoes", $assunto);
            $insert->bindValue(":anotacoes", $anotacoes);
            $insert->bindValue(":id_materia", $id);
            $insert->execute();
            echo "alert('Anotação criada com sucesso');";
            header("Location: ../view/topicos-materia.php?id=".$id_materia['id_materia']);
        }
       
    }
    


    }catch(Exception $e){
        echo "ERRO NÃO FOI POSSÍVEL INSERIR AS ANOTAÇÕES POR GENTILEZA VERIFIQUE SE HOUVE ALGUM ERRO:".$e->getMessage()."Codigo:".$e->getCode();
   
        
}
?>