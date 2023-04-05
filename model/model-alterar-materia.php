<?php $id = filter_input(INPUT_GET, "id"); ?>
<?php
include_once("../connect.php");
try{
    $assunto = $_POST['assunto'];
    $query = $conn->query("SELECT * FROM tbl_materias");        
    $fetch =  $query->fetchAll();
foreach($fetch as $register=>$item){
    var_dump($item["id_materia"]);
    if($id == $item["id_materia"]){
        $query_update = $conn->prepare("UPDATE tbl_materias SET materias = :materias WHERE id_materia = :id");
        $query_update->bindValue(":materias", $assunto);        
        $query_update->bindValue(":id", $id);        
        $query_update->execute();
        
        header("Location: ../index.php?id={$item["id_materia"]}");
    }
}
}catch(Exception $e){
    echo  "NÃO FOI POSSÍVEL ALTERAR O REGISTRO POR GENTILEZA VERIFIQUE SE HOUVE ALGUM ERRO:".$e->getMessage()."Codigo:".$e->getCode();
}
?>