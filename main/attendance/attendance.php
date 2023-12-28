<?php
session_start();
require_once('../db_conn.php');
$teacherId = (isset($_SESSION['teacherId'])) ? $_SESSION['teacherId'] : "teacher id not set";
$teacherToken = (isset($_SESSION['teacherToken'])) ? $_SESSION['teacherToken'] : "teacher token not set";
$teacherStrand = (isset($_SESSION['teacherStrand'])) ? $_SESSION['teacherStrand'] : "teacher strand not set";
$teacherSection = (isset($_SESSION['teacherSection'])) ? $_SESSION['teacherSection'] : "teacher section not set";
$teacherGrdlvl = (isset($_SESSION['teacherGrdlvl'])) ? $_SESSION['teacherGrdlvl'] : "teacher grdlvl not set";
$teacherFname = (isset($_SESSION['teacherFname'])) ? $_SESSION['teacherFname'] : "teacher Fname not set";
$teacherLname = (isset($_SESSION['teacherLname'])) ? $_SESSION['teacherLname'] : "teacher lname not set";
$teacherFullName = $teacherFname . ' ' . $teacherLname;
$studTable = $teacherStrand . "_students_" . $teacherGrdlvl;
$studToken = (isset($_POST["token"])) ? htmlspecialchars($_POST["token"]) : "token not set";
if(isset( $_POST['fname'], $_POST['lname'], $_POST['grd_lvl'], $_POST['strand'], $_POST['section'], $_POST['adviser'], $_POST['date'])){
        $studFname = $_POST['fname'];
        $studLname = $_POST['lname'];
        $studGradelvl = $_POST['grd_lvl'];
        $studSection = $_POST['section'];
        $studAdviser = $_POST['adviser'];
        $studStrand = $_POST['strand'];
        $studDate = $_POST['date'];
        $stmt = $conn->prepare("INSERT INTO attendance(fname, lname, grd_lvl, strand, section, adviser, `date`) VALUES(:fname, :lname, :grd_lvl, :strand, :section, :adviser, :date_time)");

        $stmt->execute([
            ":fname"=>$studFname,
            ":lname"=>$studLname,
            ":grd_lvl"=>$studGradelvl,
            ":strand"=>$studStrand,
            ":section"=>$studSection,
            ":adviser"=>$studAdviser,
            ":date_time"=>$studDate
        ]);
        if($stmt->rowCount()>0){

        echo "successfully inserted";

        }else{
            echo "failed to insert data";
        }
}
if(isset($_POST['getStudData'])){
   $stmt = $conn->prepare("SELECT * FROM students WHERE token=:token ");
   $stmt->execute([":token"=>$studToken]);
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   if($stmt->rowCount()>0){
    $result["grd_lvl"]=$teacherGrdlvl;
    $result["strand"]=$teacherStrand;
   echo json_encode($result);
   }else{
    echo "student does not exist";
   }
}








?>