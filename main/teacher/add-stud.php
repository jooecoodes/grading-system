<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="teacher.js"></script>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

#studentForm {
    background-color: #ffffff;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input, button {
    margin-bottom: 15px;
    padding: 10px;
}

#numberOfStud {
    width: 50%;
}

#numberOfStudBttn {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
    border: none;
    border-radius: 4px;
}

#numberOfStudBttn:hover {
    background-color: #45a049;
}

#studInputContainer {
    max-width: 600px;
}

input[type="button"] {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
    border: none;
    border-radius: 4px;
}

input[type="button"]:hover {
    background-color: #45a049;
}

a {
    text-decoration: none;
    color: #333;
    margin-bottom: 15px;
}

button {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
    border: none;
    border-radius: 4px;
}

button:hover {
    background-color: #45a049;
}

#logoutBttn {
    background-color: #f44336;
}

#logoutBttn:hover {
    background-color: #d32f2f;
}


    </style>
    <title>Document</title>
</head>
<body>
<form id="studentForm">
    <input type="number" name="numberOfStud" id="numberOfStud" max="10">
    <button id="numberOfStudBttn">done</button>
    <div id="studInputContainer"></div>
    <input type="button" value="Submit" id="submitStudForm">
</form>
    <a href=""></a>
    <button id="manageStudentPageBttn">Manage Students</button>
   <button id="logoutBttn">log out</button>
</body>
</html>