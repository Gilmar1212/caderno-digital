<?php
    include_once("../connect.php");
    try{
        $materias = $_POST['materias'];
        $result = $conn->prepare("SELECT * FROM tbl_materias");
        $result_User = $conn->prepare("SELECT * FROM tbl_user");
        $result_User->execute();
        $result->execute();
        $resultArray = $result->fetchAll();
        $resultUserArray = $result_User->fetchAll();
        
        
        
        foreach ($resultArray as $key => $value) {
            foreach ($resultUserArray as $key_user => $register) {
                if ($value['id_user'] == $register['id_user']) {
                    $exec = $conn->prepare("INSERT INTO tbl_materias(materias) VALUES (:materias)");
                    $exec->bindValue(":materias", $materias);
                if($exec->execute()==true){
                    echo '<script>alert("Matéria criada com sucesso");';
                    echo 'window.location.href ="../index.php";</script>';
                }
            }
            }
        }

    }catch(Exception $e){
        echo "ERRO NÃO FOI POSSÍVEL INSERIR AS ANOTAÇÕES POR GENTILEZA VERIFIQUE SE HOUVE ALGUM ERRO:".$e->getMessage()."Codigo:".$e->getCode();
    }
