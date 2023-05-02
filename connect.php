<?php
     try{
        $username = "db_caderno";
        $password = "zKzKYI/q5Y";
        $conn = new PDO ('mysql:host=localhost;dbname=u355963129_db_caderno;charset=utf8mb4',$username, $password)or die("fodase");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            echo'ERROR'. $e->getMessage();
        }
?>
<?php
    //  try{
    //     $username = "root";
    //     $password = "";
    //     $conn = new PDO ('mysql:host=localhost;dbname=db_caderno;charset=utf8mb4',$username, $password)or die("fodase");
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //     }catch(Exception $e){
    //         echo'ERROR'. $e->getMessage();
    //     }
?>