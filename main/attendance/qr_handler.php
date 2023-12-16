<?php
// Include the QR code library
require_once ('../db_conn.php');
require_once('../../phpqrcode/qrlib.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["file"],$_POST['id'],$_POST['lname'],$_POST['fname'],$_POST['gradeLvl'],$_POST['section']) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        // Specify the directory to save the uploaded file
        $file = $_FILES['file'];
        $id = $_POST['id'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $gradeLvl = $_POST['gradeLvl'];
        $section = $_POST['section'];

        $uploadDirectory = "../../assets/profile/";

        // Get the temporary file name
        $tmpFileName = $_FILES["file"]["tmp_name"];

        // Generate a unique name for the uploaded file
        $newFileName = $uploadDirectory . uniqid() . "_" . basename($_FILES["file"]["name"]);

        // Move the file to the specified directory
        if (move_uploaded_file($tmpFileName, $newFileName)) {
            echo "File uploaded successfully. Stored at: $newFileName";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Error: " . $_FILES["file"]["error"];
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

?>