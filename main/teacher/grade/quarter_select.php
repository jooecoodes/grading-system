<?php
if(isset($_GET['user'], $_GET['sem'])){
$userToken = $_GET['user'];
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
    <?php if($sem == 1){

     ?>
    <a href="../index.php?user=<?=$userToken?>&sem=<?= $sem ?>&q=1">Quarter 1</a> 
    <a href="../index.php?user=<?=$userToken?>&sem=<?= $sem ?>&q=2">Quarter 2</a>
    <?php } else if($sem == 2){?>
    <a href="../index.php?user=<?=$userToken?>&sem=<?= $sem ?>&q=3">Quarter 3</a>
    <a href="../index.php?user=<?=$userToken?>&sem=<?= $sem ?>&q=4">Quarter 4</a>
    <?php } ?>
</body>
</html>