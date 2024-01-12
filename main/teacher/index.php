<?php
session_start();
if (isset($_SESSION['teacherId'])){
    $studNo = (isset($_GET["stud_no"])) ? htmlspecialchars($_GET["stud_no"]) : 0;

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="teacher.js"></script>

    <link rel="stylesheet" href="Teacher.css">
    <title>Document</title>
</head>
<body>
<input type="number" name="numberOfStud" id="numberOfStud" max="10" min="0">
    <button id="numberOfStudBttn">done</button>
<form id="studentForm" action = "teacher.php" method="POST">
    <?php for($i = 0; $i < $studNo; $i++) {?>

        <label for="studentLrn">LRN</label>
        <input max="12" type="text" name="student-lrn<?= $i ?>" id="studentLrn" pattern="[0-9]+"  placeholder="Enter LRN"  required>

        <label for="studentFname">First Name</label>
        <input maxlength="20" type="text" name="student-fname<?= $i ?>" id="studentFname" placeholder="Enter First Name" >

        <label for="studentMinitial">Middle initial</label>
        <input maxlength="20" type="text" name="student-minitial<?= $i ?>" id="studentMinitial" placeholder="Enter Middle Name" >

        <label for="studentLname">Last Name</label>
        <input maxlength="20" type="text" name="student-lname<?= $i ?>" id="studentLname" placeholder="Enter Last Name" >

        <select name="student-gender<?= $i ?>" id="genderField">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
        </select>
        
        <input type="number" name="student-age<?= $i?>" id="ageField">
        <input type="date" name="student-birthdate<?= $i ?>" id="birthdateField">
        <input type="hidden" value="<?= $studNo ?>" name="studNo">

<?php } ?>
    <input type="submit" value="Submit" id="submitStudForm">
</form>
    <a href="manage-stud.php">Manage Students</a>
   <button id="logoutBttn">log out</button>
</body>
</html>

<?php
}else{
    echo "Your not log in";
}
?>
