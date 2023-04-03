<?php
    include_once("../connect.php");
    header("Location: ../index.php");
    try{
        $materias = $_POST['materias'];
        $result = $conn->prepare("SELECT * FROM tbl_materias");
        $result->execute();
        $resultArray = $result->fetchAll();
        $exec = $conn->prepare("INSERT INTO tbl_materias(materias) VALUES (:materias)");
        $exec->bindValue(":materias", $materias);
        $exec->execute();
    

    }catch(Exception $e){
        echo "ERRO NÃO FOI POSSÍVEL INSERIR AS ANOTAÇÕES POR GENTILEZA VERIFIQUE SE HOUVE ALGUM ERRO:".$e->getMessage()."Codigo:".$e->getCode();
    }
?>