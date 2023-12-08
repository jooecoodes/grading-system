<?php
require_once("../db_conn.php");
session_start();
if (isset($_SESSION['teacherId'])) {
    $teacherStrand = (isset($_SESSION['teacherStrand'])) ? htmlspecialchars($_SESSION['teacherStrand']) : 'teacher strand not set';
    $teacherSection = (isset($_SESSION['teacherSection'])) ? htmlspecialchars($_SESSION['teacherSection']) : "teacher section not set";
    $studStrand = '';
    $studSection = '';
    // switch($teacherStrand) {
    //     case 'case';
    // }
    if (isset($_POST['studLrn'], $_POST['studFname'], $_POST['studLname'])) {
        $studLrn = $_POST['studLrn'];
        $studFname = $_POST['studFname'];
        $studLname = $_POST['studLname'];
        $data = [
            "tabName" => $teacherSection,
            "studLrn" => $studLrn,
            "studFname" => $studFname,
            "studLname" => $studLname,

        ];
        if (!empty($studLrn) && !empty($studFname) && !empty($studLname)) {
            insertStud($conn, $data);
        } else {
        }
    }

    function insertStud($conn, $data)
    {
        $stmt = $conn->prepare("INSERT INTO :tabName(lrn, fname, lname, section) VALUES( :studLrn, :studFname, :studLname, :section");
        if ($stmt->execute($data)) {
            echo "Successfully inserted student";
        } else {
            echo "Student Insertion Failed";
        }
    }
} else {
    echo "You're not a teacher or logged in";
}
