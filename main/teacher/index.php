<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="teacher.js"></script>
    <title>Document</title>
</head>
<body>
<form id="studentForm">
    <input type="number" name="numberOfStud" id="numberOfStud" max="10" min="0">
    <button id="numberOfStudBttn">done</button>
    <div id="studInputContainer"></div>
    <input type="button" value="Submit" id="submitStudForm">
</form>
    <a href="manage-stud.php">Manage Students</a>
   <button id="logoutBttn">log out</button>
</body>
</html>