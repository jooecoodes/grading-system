<?php
session_start();
require_once('../../db_conn.php');

if(isset($_POST['submit'])){
    $teacherStrand = (isset($_SESSION['teacherStrand'])) ? htmlspecialchars($_SESSION['teacherStrand']) : 'teacher strand not set';
    $teacherSection = (isset($_SESSION['teacherSection'])) ? htmlspecialchars($_SESSION['teacherSection']) : "teacher section not set";
    $teacherGradeLevel = (isset($_SESSION['teacherGrdlvl'])) ? htmlspecialchars($_SESSION['teacherGrdlvl']) : "teacher grade level not set";
    $teacherFname = (isset($_SESSION['teacherFname'])) ? htmlspecialchars($_SESSION['teacherFname']) : "teacher Fname not set";
    $teacherLname = (isset($_SESSION['teacherLname'])) ? htmlspecialchars($_SESSION['teacherLname']) : "teacher Lname not set";
    $teacherFullName = $teacherFname. ' ' . $teacherLname; 
    $studTable = $teacherStrand . '_students_' . $teacherGradeLevel;
    $studSection = $teacherSection;
// Define an empty array to store POST values
$postData = array();
$sem = $_POST['sem'];
$currentSem = ($sem==1) ? 1 : 2;
$semGradeTable = "sem$currentSem". "_grades";
$userToken = $_POST['token'];

// Loop through each POST value and store it in the array
foreach ($_POST as $key => $value) {

    // You may want to sanitize or validate the data before storing it
    // For example, you can use htmlspecialchars to prevent HTML injection
    $postData[$key] = htmlspecialchars($value);
}
print_r($postData);
$grades = implode(",",$postData);
echo $grades;
$removeToken = removeFromString($grades, $userToken);
$removeSem = removeFromString($removeToken, $sem);
$grades = removeFromString($removeSem, $_POST['submit']);
$stmt= $conn->prepare("UPDATE $studTable SET $semGradeTable=:grades WHERE token=:token");
$stmt->execute([
    ':grades'=>$grades,
    ':token'=> $userToken
]);
if($stmt->rowCount()>0){
 echo "Successfully inserted data";
}else{
 echo "not successfully inserted data";
}
}
function removeFromString($str, $item) {
    $parts = explode(',', $str);

    while(($i = array_search($item, $parts)) !== false) {
        unset($parts[$i]);
    }

    return implode(',', $parts);
}




?>