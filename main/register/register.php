<?php
require_once("../db_conn.php");
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confpwd']) && isset($_POST['strand']) && isset($_POST['token'])) {
    $email = (isset($_POST['email'])) ? htmlspecialchars($_POST['email']) : "email not set";
    $pwd = (isset($_POST['password'])) ? htmlspecialchars($_POST['password']) : "password not set";
    $confPwd = (isset($_POST['confpwd'])) ? htmlspecialchars($_POST['confpwd']) : "conf pwd not set";
    $strand = (isset($_POST['strand'])) ? htmlspecialchars($_POST['strand']) : "strand not set";
    $token = (isset($_POST['token'])) ? htmlspecialchars($_POST['token']) : "token not set";
    $data = [
        "email" => $email,
        "pwd" => $pwd,
        "strand" => $strand,
    ];
    if (empty($email) && empty($pwd) && empty($confPwd) && empty($strand) && empty($token)) {
        echo "Fill in all the fields";
    } else {
        if ($pwd == $confPwd) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email invalid";
            } else {
                dataInsertion($conn, $data);
            }
        } else {
            echo "Password doeesn't match";
        }
    }
}

function dataInsertion($conn, $data)
{
    $stmt = $conn->prepare("INSERT INTO teachers(email, pwd, strand) VALUES(:email,:pwd,:strand)");
    if ($stmt->execute($data)) {
        echo "Successfully inserted data";
    } else {
        echo "Insertion Field";
    }
}
