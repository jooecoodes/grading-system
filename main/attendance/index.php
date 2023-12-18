<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="attendance.js"></script>
</head>
<body>

<video id="preview"></video>
  
<form id="attendanceForm">
<label>Profile:</label>
<img src="" alt="" id="pfpField">
<label for="">First name</label>
<input type="text" name="fname" id="fnameField">
<label for="">Last name</label>
<input type="text" name="Lname" id="lnameField">
<label for="">Grade level</label>
<input type="text" name="grd_lvl" id="grd_lvlField">
<label for="">Strand</label>
<input type="text" name="strand" id="strandField">
<label for="">Section</label>
<input type="text" name="section" id="sectionField">
<label for="adviser">Adviser</label>
<input type="text" name="adviser" id="adviserField">
<input type="submit" value="record">

</form>
</body>
</html>