<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="register.js"></script>
 <link rel="stylesheet" href="art1.css">
    <title>Document</title>
</head>
<body>
    <form id="registrationForm">
        <label for="teacherFname">First Name</label>
        <input type="text" name="teacherFname" id="teacherFname">
        <label for="teacherLname">Last Name</label>
        <input type="text" name="teacherLname" id="teacherLname">
        <label for="emailField">Email</label>
        <input type="text" name="email" id="emailField" placeholder="Enter Email">
        <label for="passwordField">Password</label>
        <input type="password" name="password" id="passwordField" placeholder="Enter Password">
        <input type="password" name="conf-pwd" id="confPwdField" placeholder="Confirm Password">
        <label for="strandField">Strand</label>
        <select name="strand" id="strandField">
        <option value="abm">ABM</option>
        <option value="ict">ICT</option>
        <option value="humss">HUMSS</option>
        <option value="he">HE</option>
        <option value="stem">STEM</option>
        <option value="eim">EIM</option>
</select>
        <label for="sectionField">section</label>
        <select name="section" id="sectionField">
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="d">D</option>
        <option value="f">F</option>
</select>

        <label for="grade">Grade Level</label>
        <select name="grade" id="gradeField">
        <option value="11">11</option>
        <option value="12">12</option>
</select>

        <label for="tokenField">Token</label>
        <input type="text" name="token" id="tokenField" placeholder="Enter Token">
        <input type="submit" name="submit-btn" id="submitBtn" value="Submit">
        <button type="submit" name="submit-btn" id="submitBtn" value="Submit" onclick="backFunction()">back to login</button>
    </form>
    <script>
        function backFunction(){
            location.href="../login/index.php";
        }
    </script>
</body>
</html>