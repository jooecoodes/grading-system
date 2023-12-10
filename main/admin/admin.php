<?php
require_once("../db_conn.php");

if(isset($_POST['generateToken'])){
    $token =bin2hex(random_bytes(20));
    $stmt = $conn->prepare("INSERT INTO tokens(token) VALUES(:token)");
    if($stmt->execute(["token"=> $token])){
    echo "successfully insert token";
    echo $token;

    }
    else{
        echo "Insertion token failed";
    }
    
    
}












?>
