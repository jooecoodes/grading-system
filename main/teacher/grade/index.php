<?php 
session_start();
require_once('../../db_conn.php');
$teacherSubjects = array(); // Initialize to an empty array

if(isset($_GET['user'], $_GET['sem'])){

if(isset($_SESSION['teacherId'])){

$userToken = $_GET['user'];
$sem = $_GET['sem'];
$teacherId = (isset($_SESSION['teacherId'])) ? $_SESSION['teacherId'] : "teacher id not set"; 
$teacherSubjects = explode(",", retrieveTeacherSubject($conn, $sem, $teacherId));
$teacherStrand = (isset($_SESSION['teacherStrand'])) ? htmlspecialchars($_SESSION['teacherStrand']) : 'teacher strand not set';
$teacherSection = (isset($_SESSION['teacherSection'])) ? htmlspecialchars($_SESSION['teacherSection']) : "teacher section not set";
$teacherGradeLevel = (isset($_SESSION['teacherGrdlvl'])) ? htmlspecialchars($_SESSION['teacherGrdlvl']) : "teacher grade level not set";
    $teacherFname = (isset($_SESSION['teacherFname'])) ? htmlspecialchars($_SESSION['teacherFname']) : "teacher Fname not set";
    $teacherLname = (isset($_SESSION['teacherLname'])) ? htmlspecialchars($_SESSION['teacherLname']) : "teacher Lname not set";
    $teacherFullName = $teacherFname. ' ' . $teacherLname; 
    $studTable = $teacherStrand . '_students_' . $teacherGradeLevel;
    $studSection = $teacherSection;
    $userInfo = retrieveStud($conn, $userToken, $studTable);
    var_dump($userInfo);
var_dump($teacherSubjects);
    }else{
        echo "you are not a teacher";
    }

}
function retrieveTeacherSubject($conn, $sem, $teacherId){
    $semModified = "sem$sem"."_subjects";
    $stmt = $conn->prepare("SELECT * FROM teachers WHERE id=:teacherid");
    $stmt->execute([
        ':teacherid'=>$teacherId
    ]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0){
        // print_r($result);
        return $result['sem1_subjects'];
    }else{
        return "1, 2, 3";
        
    }
    
}
function retrieveStud($conn, $token, $studTable){
    $stmt = $conn->prepare("SELECT `profile`, fname, lname, LRN FROM $studTable WHERE token=:token ");
    $stmt->execute([
        ':token'=>$token
    ]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0){
        return $result;
    }else{
        return 'student does not exist gaba';
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="grade.php" method="POST">
       <input type="hidden" name="sem" value="<?php echo $sem ?>">
       <input type="hidden" name="token" value="<?php echo $userToken ?>">
       <?php foreach($teacherSubjects as $subject):?>
        <label for=""><?php echo $subject ?></label>
        <input type="text" name="<?php echo $subject ?>"> 
     <?php endforeach; ?>


     <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>