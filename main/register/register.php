<?php
require_once("../db_conn.php");

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confpwd']) && isset($_POST['strand']) && isset($_POST['section']) && isset($_POST['grade']) && isset($_POST['token'])) {
    $email = (isset($_POST['email'])) ? htmlspecialchars($_POST['email']) : "email not set";
    $pwd = (isset($_POST['password'])) ? htmlspecialchars($_POST['password']) : "password not set";
    $confPwd = (isset($_POST['confpwd'])) ? htmlspecialchars($_POST['confpwd']) : "conf pwd not set";
    $strand = (isset($_POST['strand'])) ? htmlspecialchars($_POST['strand']) : "strand not set";
    $section = (isset($_POST['section'])) ? htmlspecialchars($_POST['section']) : "section not set";
    $grade = (isset($_POST['grade'])) ? htmlspecialchars($_POST['grade']) : "grade not set";
    $token = (isset($_POST['token'])) ? htmlspecialchars($_POST['token']) : "token not set";
    $data = [
        "email" => $email,
        "pwd" => $pwd,
        "strand" => $strand,
        "section" => $section,
        "grade" => $grade,
        "token" => $token,
    ];
    if (empty($email) && empty($pwd) && empty($confPwd) && empty($strand) && empty($token)) {
        echo "Fill in all the fields";
    } else {
        // token verification
        if (verifyToken($conn, $token)) {
            if ($pwd == $confPwd) {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "Email invalid";
                } else {
                    dataInsertion($conn, $data);
                }
            } else {
                echo "Password doesn't match";
            }
        } else {
            echo "Invalid Token";
        }
    }
}

function verifyToken($conn, $token)
{
    $stmt = $conn->prepare("SELECT * FROM tokens WHERE token=:token ");
    $stmt->execute([":token" => $token]);
    $result = $stmt->fetch();
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function dataInsertion($conn, $data)
{
    $deleteStmt = $conn->prepare("DELETE FROM tokens WHERE token=:token");
    if ($deleteStmt->execute([":token"=>$data["token"]])){
        $stmt = $conn->prepare("INSERT INTO teachers(email, pwd, strand, section, grd_lvl, token) VALUES(:email,:pwd,:strand,:section,:grade,:token)");
        if ($stmt->execute($data)) {
            echo "Successfully inserted data";
        } else {
            echo "Insertion Failed";
        }
    }else{
        echo "couldn't find token ";
    }
    
}
?>
