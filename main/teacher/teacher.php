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
    $studSection = $teacherSection;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["studNo"])) {
            print_r($_POST);
            for($i = 0; $i < $_POST["studNo"]; $i++) {
            $studLrn = $_POST["student-lrn".$i];
            $studFname = $_POST["student-fname".$i];
            $studMinitial = $_POST["student-minitial".$i];
            $studLname = $_POST["student-lname".$i];
            $studGender = $_POST["student-gender".$i];
            $studAge = $_POST["student-age".$i];
            $studBirthDate = $_POST["student-birthdate".$i];
            $token = uniqid("",true);
            print_r($studLrn);
            print_r($studFname);
            print_r($studMinitial);
            print_r($studLname);
            print_r($studGender);
            print_r($studAge);
            print_r($studBirthDate);
            print_r($token);
            
            $data = [
                ":studLrn" => $studLrn,
                ":studFname"=>$studFname,
                ":studMinitial"=>$studMinitial,
                ":studLname"=>$studLname,
                ":studGender"=>$studGender,
                ":studAge"=>$studAge,
                ":studBirthDate"=>$studBirthDate,
                ":token"=>$token,
                ":adviser"=>$teacherFullName,
                ":section"=>$teacherSection
            ];
              
            if (!empty($studLrn) && !empty($studFname) && !empty($studMinitial) && !empty($studLname) && !empty($studGender) && !empty($studAge) && !empty($studBirthDate)) {
                
      
                //insertion
                insertStud($conn, $data);

                } else {
                    echo "All fields has to be filled";
                }
                }
            
            }
           
            
        }
     } else {
    echo "You're not a teacher or logged in";
}

function insertStud($conn, $data){
    $stmt = $conn->prepare("INSERT INTO students(LRN, fname, minitial, lname, gender, age, birthdate, token, adviser, section) VALUES(:studLrn, :studFname, :studMinitial, :studLname, :studGender, :studAge, :studBirthDate, :token, :adviser, :section)");
    $stmt->execute($data);
    print_r($data);
    if ($stmt->rowCount()>0) {
        echo "Successfully inserted data";
    } else {
        echo "Insertion Invalid";
    }
}
