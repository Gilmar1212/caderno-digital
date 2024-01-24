<?php
    include_once("../connect.php");
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $query_user = $conn->prepare("SELECT * FROM tbl_user");
    $query_user->execute();
        foreach($query_user as $register){        
            if($login == $register['usuario'] && password_verify($senha, $register['senha'])){
                echo "acesso com sucesso";
            }else{
                throw new Exception("Usuário ou senha incorreto");                 
            }                         
        }
?>