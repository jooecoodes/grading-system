<?php 
session_start();
if(isset( $_GET['sem'])){
    $sem = $_GET['sem'];
    if(isset($_GET['subject'])){
        $numOfSub = $_GET['subject'];
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
    <h1>Sem: <?php echo $sem ?></h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="sem" value="<?php echo $sem ?>">
     <input type="number" name="subject" >
     <input type="submit">

    </form>
    <form action="subject.php" method="POST">
        <input type="hidden" name="numOfSub" value="<?php echo $numOfSub ?>">
        <input type="hidden" name="sem" value="<?php echo $sem ?>">
        <?php $counter = 1; ?>
    <?php if(isset($numOfSub)){
   for($i = 0; $i < $numOfSub; $i++){?>
   <label for="subject<?php echo $counter ?>">Subject <?php echo $counter ?></label>
   <input type="text" id="subject<?php echo $counter ?>" name="subject<?php echo $counter ?>">
   <?php
   $counter++;}
}
    ?>
    <input type="submit" value="Submit">
    </form>
</body>
</html>