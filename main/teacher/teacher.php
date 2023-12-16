<?php
require_once("../db_conn.php");
session_start();
if (isset($_SESSION['teacherId'])) {
    $teacherStrand = (isset($_SESSION['teacherStrand'])) ? htmlspecialchars($_SESSION['teacherStrand']) : 'teacher strand not set';
    $teacherSection = (isset($_SESSION['teacherSection'])) ? htmlspecialchars($_SESSION['teacherSection']) : "teacher section not set";
    $teacherGradeLevel = (isset($_SESSION['teacherGrdlvl'])) ? htmlspecialchars($_SESSION['teacherGrdlvl']) : "teacher grade level not set";
    $teacherFname = (isset($_SESSION['teacherFname'])) ? htmlspecialchars($_SESSION['teacherFname']) : "teacher Fname not set";
    $teacherLname = (isset($_SESSION['teacherLname'])) ? htmlspecialchars($_SESSION['teacherLname']) : "teacher Lname not set";
    $teacherFullName = $teacherFname. ' ' . $teacherLname; 
    $studTable = $teacherStrand . '_students_' . $teacherGradeLevel;
    $studSection = $teacherSection;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $postData = json_decode(file_get_contents('php://input'), true);
            foreach ($postData as $student) {
                $studLrn =  htmlspecialchars($student['studLrn']);
                $studFname = htmlspecialchars($student['studFname']);
                $studLname = htmlspecialchars($student['studLname']);
                $token = uniqid("",true);

                $data = [
                    ":studLrn" => $studLrn,
                    ":studFname" => $studFname,
                    ":studLname" => $studLname,
                    ":studSection" => $studSection,
                    ":adviser"=> $teacherFullName,
                    ":token"=> $token
                ];
                if (!empty($studLrn) && !empty($studFname) && !empty($studLname)) {
               

                //insertion
                insertStud($conn, $data, $studTable);

                } else {
                    echo "All fields has to be filled";
                }
            }
    }
} else {
    echo "You're not a teacher or logged in";
}

function insertStud($conn, $data, $studTable)
{
    $stmt = $conn->prepare("INSERT INTO $studTable(LRN, fname, lname, section, adviser, token) VALUES(:studLrn, :studFname, :studLname, :studSection, :adviser, :token)");
    if ($stmt->execute($data)) {
        echo "Successfully inserted data";
    } else {
        echo "Insertion Invalid";
    }
}
