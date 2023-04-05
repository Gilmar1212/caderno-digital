<?php $id = filter_input(INPUT_GET, "id"); ?>
<?php
include_once("../connect.php");
try{
    $anotacoes = $_POST['anotacoes'];
    $assunto = $_POST['assunto'];
    $query = $conn->query("SELECT * FROM tbl_anotacoes");        
    $fetch =  $query->fetchAll();
foreach($fetch as $register=>$item){
    if($id == $item["id_anotacoes"]){
        $query_update = $conn->prepare("UPDATE tbl_anotacoes SET anotacoes = :anotacoes, assunto_anotacoes = :assunto WHERE id_anotacoes = :id");
        $query_update->bindValue(":anotacoes", $anotacoes);
        $query_update->bindValue(":assunto", $assunto);        
        $query_update->bindValue(":id", $id);        
        $query_update->execute();
        
        header("Location: ../view/topicos-materia.php?id={$item["id_materia"]}");
    }
}
}catch(Exception $e){
    echo  "NÃO FOI POSSÍVEL INSERIR AS ANOTAÇÕES POR GENTILEZA VERIFIQUE SE HOUVE ALGUM ERRO:".$e->getMessage()."Codigo:".$e->getCode();
}
?>