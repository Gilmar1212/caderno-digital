<?php
include_once("../connect.php");
ini_set("display_errors", 1);
$query_fetch = $conn->query("SELECT * FROM tbl_user");
$user_signup = $_POST['usuario'];
$pass_signup = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$pass_repeat_signup = password_hash($_POST['repetir-senha'], PASSWORD_DEFAULT);
$query_fetch->fetchAll();
$query_fetch->execute();
if($query_fetch->rowCount() == 0){
    $query_signup = $conn->prepare("INSERT INTO tbl_user(usuario ,senha) VALUES (:user, :pass)");
    $query_signup->bindValue(":user", $user_signup);
    $query_signup->bindValue(":pass", $pass_signup);
    if ($query_signup->execute()== true) {
        echo '<script>alert("Cadastro realizada com sucesso");</script>';
    } else {
        throw new Exception("Erro no cadastro");
    }        
}else{
foreach ($query_fetch as $register) {
    if($user_signup !== $register['usuario'] && $_POST['senha'] == $_POST['repetir-senha']){
        $query_signup = $conn->prepare("INSERT INTO tbl_user(usuario ,senha) VALUES (:user, :pass)");
        $query_signup->bindValue(":user", $user_signup);
        $query_signup->bindValue(":pass", $pass_signup);
        if ($query_signup->execute()== true) {
            echo '<script>alert("Cadastro realizada com sucesso");</script>';
            break;
        } else {
            throw new Exception("Erro no cadastro");
        }
    }
    
        
     else {
        throw new Exception("Usuário já existe");
    }
}
}
