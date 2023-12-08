<?php
require_once("../db_conn.php");
session_start();
if (isset($_SESSION['teacherId'])) {
    $teacherStrand = (isset($_SESSION['teacherStrand'])) ? htmlspecialchars($_SESSION['teacherStrand']) : 'teacher strand not set';
    $teacherSection = (isset($_SESSION['teacherSection'])) ? htmlspecialchars($_SESSION['teacherSection']) : "teacher section not set";
    $teacherGradeLevel = (isset($_SESSION['teacherGradeLevel'])) ? htmlspecialchars($_SESSION['teacherGradeLevel']) : "teacher grade level not set";
    $studTable = $teacherStrand . '_students_' . $teacherGradeLevel ;
    $studSection = $teacherSection;

    if (isset($_POST['studLrn'], $_POST['studFname'], $_POST['studLname'])) {
        $studLrn = $_POST['studLrn'];
        $studFname = $_POST['studFname'];
        $studLname = $_POST['studLname'];
        $data = [
            ":studLrn" => $studLrn,
            ":studFname" => $studFname,
            ":studLname" => $studLname,
            ":studSection" => $studSection,
        ];
        if (!empty($studLrn) && !empty($studFname) && !empty($studLname)) {
            insertStud($conn, $data, $studTable);
        } else {
            echo "All fields has to be fileld";
        }
    }
} else {
    echo "You're not a teacher or logged in";
}

function insertStud($conn, $data, $studTable)
{
    $stmt = $conn->prepare("INSERT INTO $studTable(LRN, fname, lname, section) VALUES(:studLrn, :studFname, :studLname, :studSection");
    if($stmt->execute($data)){
        echo "Successfully inserted data";
    } else {
        echo "Insertion Invalid";
    }
}
