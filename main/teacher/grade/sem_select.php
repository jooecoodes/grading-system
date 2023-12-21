<?php
if(isset($_GET['user'])){
$userToken = $_GET['user'];

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
    <a href="index.php/?user=<?php echo $userToken?>&sem=1">Semester 1</a>

    <a href="index.php/?user=<?php echo $userToken?>&sem=2">Semester 2</a>
</body>
</html>