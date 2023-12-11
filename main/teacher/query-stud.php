<?php
    require_once("../db_conn.php");
    session_start();
    if(isset($_POST['fetchStud'], $_SESSION['teacherId'])){
        $teacherId = (isset($_SESSION['teacherId'])) ? $_SESSION['teacherId'] : "teacher id not set";
        $teacherToken = (isset($_SESSION['teacherToken'])) ? $_SESSION['teacherToken'] : "teacher token not set";
        $teacherStrand = (isset($_SESSION['teacherStrand'])) ? $_SESSION['teacherStrand'] : "teacher strand not set";
        $teacherSection = (isset($_SESSION['teacherSection'])) ? $_SESSION['teacherSection'] : "teacher section not set";
        $teacherGrdlvl = (isset($_SESSION['teacherGrdlvl'])) ? $_SESSION['teacherGrdlvl'] : "teacher grdlvl not set";
        $teacherFname = (isset($_SESSION['teacherFname'])) ? $_SESSION['teacherFname'] : "teacher Fname not set";
        $teacherLname = (isset($_SESSION['teacherLname'])) ? $_SESSION['teacherLname'] : "teacher lname not set";
        $teacherFullName = $teacherFname . ' ' . $teacherLname;
        $studTable = $teacherStrand . "_students_" . $teacherGrdlvl;
        $dataForTokenVerification = [
            ":teacherid" => $teacherId,
            ":teachertoken" => $teacherToken,
        ];
        $dataForStudFetch = [
            ":teacherfullname" =>  $teacherFullName,
            ":teachersection" => $teacherSection,
        ];

        if(verifyTeacherToken($conn, $dataForTokenVerification)) {
           $result = fetchStud($conn, $dataForStudFetch, $studTable);
           echo json_encode($result);
        } else {
            echo "Token verification invalid";
        }
        
    } else {
       echo "You're not a teacher or logged in";
    }

    function verifyTeacherToken($conn, $data) {
        $stmt = $conn->prepare("SELECT * FROM teachers WHERE id = :teacherid AND token = :teachertoken");
        $result = $stmt->execute($data);
        if(!$result) {
            return false;
        } else {
            return true;
        }
    }

    function fetchStud($conn, $data, $studTable) {
        $stmt = $conn->prepare("SELECT * FROM $studTable WHERE adviser = :teacherfullname AND section = :teachersection");
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($result) {
            return $result;
        } else {
            return "Fetching Student Failed";
        }
    }

?>