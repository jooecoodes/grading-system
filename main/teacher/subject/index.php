<?php 
session_start();
if(isset($_GET['subject'], $_GET['sem'])){
    $numOfSub = $_GET['subject'];
    $sem = $_GET['sem'];
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
    <form action="subject.php" method="POST">
        <input type="hidden" name="numOfSub" value="<?php echo $numOfSub ?>">
        <input type="hidden" name="sem" value="<?php echo $sem ?>">
    <?php
   for($i = 0; $i < $numOfSub; $i++){ ?>
   <label for="subject<?php echo $i ?>">Subject <?php echo $i ?></label>
   <input type="text" id="subject<?php echo $i ?>" name="subject<?php echo $i ?>">
   <?php
   }
   
    ?>
    <input type="submit" value="Submit">
    </form>
</body>
</html>