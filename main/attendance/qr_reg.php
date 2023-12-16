<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="qr_handler.php" method="POST">
    <label for="pfp">Profile:</label>
    <input type="file" id="pfp" name="pfp"><br>
    <label for="id">ID:</label>
    <input type="number" id="id" name="id"><br>
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname"><br>
    <label for="gradeLvl">Grade level:</label>
    <input type="text" id="gradeLvl" name="gradeLvl"><br>
    <label for="section">Section:</label>
    <input type="text" id="section" name="section"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>