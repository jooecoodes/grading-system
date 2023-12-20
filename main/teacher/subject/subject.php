<?php
session_start();
require_once('../../db_conn.php');
if(isset($_POST['subject1'])){
    // Define an empty array to store POST values
    $postData = array();
    $sem = $_POST['sem'];
    // Loop through each POST value and store it in the array
    foreach ($_POST as $key => $value) {
        // You may want to sanitize or validate the data before storing it
        // For example, you can use htmlspecialchars to prevent HTML injection
        $postData[$key] = htmlspecialchars($value);
    }
    print_r($postData);
    $subjects = implode(",",$postData);
    echo $subjects;
    $removedNumSub =  removeFromString($subjects, $_POST['numOfSub']);
    $removedSem = removeFromString($removedNumSub, $sem);
    $subjects = $removedSem;
    $_SESSION['teacherSubjects']=$subjects;
    if($sem == 1){
    updateSubInSem($conn, $subjects, 1);
    }else{
        updateSubInSem($conn, $subjects, 2);
    }
   
}
function updateSubInSem ($conn, $subjects, $sem){
    $semModified = $sem . "_subjects";
    $stmt = $conn->prepare("UPDATE teachers SET sem$semModified = :subjects WHERE id=:teacherid");
    $stmt->execute([
    ':subjects'=>$subjects,
    ':teacherid'=>$_SESSION['teacherId']
    
    ]);
    if($stmt->rowCount()>0){
    echo "successfully Updated";
    }else{
        echo "Failed successfully gabaan";
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