<?php
// Include the QR code library
session_start();
require_once ('../db_conn.php');
require_once('../../phpqrcode/qrlib.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the file was uploaded without errors
    if (isset($_POST['lname'],$_POST['fname'],$_POST['LRN'],$_POST['token'])) {
        $teacherId = (isset($_SESSION['teacherId'])) ? $_SESSION['teacherId'] : "teacher id not set";
        $teacherToken = (isset($_SESSION['teacherToken'])) ? $_SESSION['teacherToken'] : "teacher token not set";
        $teacherStrand = (isset($_SESSION['teacherStrand'])) ? $_SESSION['teacherStrand'] : "teacher strand not set";
        $teacherSection = (isset($_SESSION['teacherSection'])) ? $_SESSION['teacherSection'] : "teacher section not set";
        $teacherGrdlvl = (isset($_SESSION['teacherGrdlvl'])) ? $_SESSION['teacherGrdlvl'] : "teacher grdlvl not set";
        $teacherFname = (isset($_SESSION['teacherFname'])) ? $_SESSION['teacherFname'] : "teacher Fname not set";
        $teacherLname = (isset($_SESSION['teacherLname'])) ? $_SESSION['teacherLname'] : "teacher lname not set";
        $teacherFullName = $teacherFname . ' ' . $teacherLname;
        // Specify the directory to save the uploaded file
        // $studId = $_POST['id'];
        $studLname = $_POST['lname'];
        $studFname = $_POST['fname'];
        // $studGradelvl = $_POST['gradeLvl'];
        // $studSection = $_POST['section'];
        // $studAdviser = $_POST['adviser'];
        $studLrn = $_POST['LRN'];
        // $studStrand = $_POST['strand'];
        $studToken = $_POST['token'];
        print_r($_POST);
        print_r($studLname);
        print_r($studFname);
        print_r($studLrn);
        print_r($studToken);

        $uploadDirectory = "../../assets/profile/";
        if(isset($_FILES['pfp'])){
            $studPfp = $_FILES['pfp'];
        // Get the temporary file name
        $tmpFileName = $studPfp["tmp_name"];
        $img_ex = pathinfo($studPfp['name'], PATHINFO_EXTENSION);
        $img_ex_to_lc = strtolower($img_ex);

        $allowed_exs = array('jpg', 'jpeg', 'png');
        if (in_array($img_ex_to_lc, $allowed_exs)) {
            $new_img_name = uniqid($studLname, true) . '.' . $img_ex_to_lc;
            $img_upload_path = $uploadDirectory . $new_img_name;

            if (move_uploaded_file($tmpFileName, $img_upload_path)) {
                echo "File uploaded successfully. Stored at: $new_img_name";
            } else {
                echo "Error uploading file.";
            }
            updatePfp($conn, [":studpfp"=>$new_img_name, ":studtoken"=>$studToken]);


            
        }
    }else{
        echo "error".$_FILES['pfp']['error'];
    }
    echo "this is executed";
    updateInfo($conn, [
        ":studlname"=>$studLname,
        ":studfname"=>$studFname,
        ":studlrn"=>$studLrn,
        ":studtoken"=>$studToken
    ]);
        
        

        // Move the file to the specified directory
       
    } else {
        echo "Error: " . $_FILES["pfp"]["error"];
    }
}

function generateQR($value, $name){
    // Define the text to be encoded
    $text = "1";
    $testName = "test";
    // Generate the QR code image and save it to a file
    QRcode::png($text, "../../assets/qr/$testName.png");

    // Display the QR code image in the browser
    echo "<img src='../../assets/qr/$testName.png' />";
}
function retrieveStudData($conn, $token){
    $stmt = $conn->prepare("SELECT *
    FROM abm_students_11
JOIN abm_students_12 ON abm_students_11.token = abm_students_12.token
JOIN eim_students_11 ON abm_students_12.token = eim_students_11.token
JOIN eim_students_12 ON eim_students_11.token = eim_students_12.token
JOIN gas_students_11 ON eim_students_12.token = gas_students_11.token
JOIN gas_students_12 ON gas_students_11.token = gas_students_12.token
JOIN he_students_11 ON gas_students_12.token = he_students_11.token
JOIN he_students_12 ON he_students_11.token = he_students_12.token
JOIN humss_students_11 ON he_students_12.token = humss_students_11.token
JOIN humss_students_12 ON humss_students_11.token = humss_students_12.token
JOIN ict_students_11 ON humss_students_12.token = ict_students_11.token
JOIN ict_students_12 ON ict_students_11.token = ict_students_12.token
JOIN stem_students_11 ON ict_students_12.token = stem_students_11.token
JOIN stem_students_12 ON stem_students_11.token = stem_students_12.token
WHERE abm_students_11.token = :token
    ");
    $stmt->execute([":token"=>$token]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($stmt->rowCount() > 0) {
       return $result;
    }
    else{
        echo 'Student not found';
    }
}
function insertStudPfp($conn, $data){
    $stmt = $conn->prepare("UPDATE teachers(fname, lname, email, pwd, strand, section, grd_lvl, token) VALUES(:fname, :lname, :email,:pwd,:strand,:section,:grade,:token)");
    if ($stmt->execute($data)) {
        echo "Successfully inserted data";
    } else {
        echo "Insertion Failed";
    }
}
function updatePfp($conn, $data){
    $stmt = $conn->prepare("UPDATE students SET `profile`=:studpfp WHERE token=:studtoken");
    
    $stmt->execute($data);
    if($stmt->rowCount()>0){
       echo "successfully updated Profile";
    }else{
        echo "Failed update Profile";
    }
}
function updateInfo($conn, $data){
    $stmt = $conn->prepare("UPDATE students SET  `lname` = :studlname, `fname` = :studfname, `LRN` = :studlrn WHERE `token`=:studtoken");

    // Debugging output
    echo "Token: " . $data[':studtoken'] . "<br>";
    echo "Last Name: " . $data[':studlname'] . "<br>";
    echo "First Name: " . $data[':studfname'] . "<br>";
    echo "LRN: " . $data[':studlrn'] . "<br>";
    
            $stmt->execute($data);
            $errorInfo = $stmt->errorInfo();
            if($stmt->rowCount()>0){
               echo "successfully updated info";
            }else{
                echo "Failed update info".$errorInfo[0];
            }

}

?>