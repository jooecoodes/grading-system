<?php
require_once('../db_conn.php');
require_once('../../phpqrcode/qrlib.php');
session_start();
if(isset($_GET['user'])){
    $userToken = $_GET['user'];

    if(isset($_SESSION['teacherId'])){
     include("../teacher_session.php");
     $stmt = $conn->prepare("SELECT sem1_subjects, sem2_subjects FROM teachers WHERE id=:teacherid");
     $stmt->execute([
        ':teacherid'=>$teacherId
     ]);
     $result = $stmt->fetch(PDO::FETCH_ASSOC);
     $teacherSubjectsSem1Array = explode(",", $result['sem1_subjects']);
     $teacherSubjectsSem2Array = explode(",", $result['sem2_subjects']);
     print_r($teacherSubjectsSem2Array);
    
        $stmt = $conn->prepare("SELECT * FROM students WHERE adviser = :teacherfullname AND section = :teachersection AND token = :usertoken");
        $stmt->execute([
            ":teacherfullname" =>  $teacherFullName,
            ":teachersection" => $teacherSection,
            ":usertoken" => $userToken,
     ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0) {
                //setup sessions
                $studFname = $result['fname'];
                $studLname = $result['lname'];
                $studId = $result['id'];
                $studSection = $result['section'];
                $studStrand = $teacherStrand;
                $studGrdlvl = $teacherGrdlvl;
                $studToken = $result['token'];
                $studPfp = $result['profile'];
                $studLrn = $result['LRN'];
                $studAdviser = $result['adviser'];
                $studFullName = $studFname. "_".$studLname;
                $studGradesSem1 = $result['sem1_grades'];
                $studGradesSem2 = $result['sem2_grades'];
                $studGradesSem1Array = (empty($studGradesSem1))? "no grade" : explode(",", $studGradesSem1);
                $studGradesSem2Array = (empty($studGradesSem2))? "no grade" : explode(",", $studGradesSem2);
                $profilePath = (empty($studPfp)) ? "../../assets/profile/default.png" : "../../assets/profile/$studPfp";
                
                // Define the text to be encoded
                $token = $studToken;
                // Generate the QR code image and save it to a file
                QRcode::png($token, "../../assets/qr/$studFullName.png");


                 
               
            
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form enctype="multipart/form-data" action="qr_handler.php" method="POST">
                <input type="hidden" name="token" value="<?php echo $studToken ?>">
                <label for="pfp">Profile:</label>
                <input type="file" id="pfp" name="pfp"><br>
                <img src="<?php echo $profilePath ?>" alt=""><br>
                <img src="<?php echo "../../assets/qr/$studFullName.png" ?>" alt=""><br>
                <label for="gradeLvl">Grade level:<?php echo $studGrdlvl ?></label><br>
            
                <label for="section">Section:<?php echo $studSection ?></label><br>
              
                <label for="strand">Strand:<?php echo $studStrand ?></label><br>

                <label for="adviser">Adviser:<?php echo $studAdviser ?></label><br>
                <label for="id">ID:<?php echo $studId ?></label><br>
                <label for="lrn">LRN:</label>
                <input type="text" id="lrn" name="LRN" value="<?php echo $studLrn ?>"><br>
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo $studFname ?>"><br>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" value="<?php echo $studLname ?>"><br>
            
                <input type="submit" name="submit" value="Submit">
                </form>
                <table>
        <thead>
            <tr>
                <th>Subjects</th>
                <th>Q1</th>
                <th>Q2</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add your data rows here -->
            <?php for($i = 0; $i<count($teacherSubjectsSem1Array); $i++){    ?>
            <tr>
                <td><?php echo $teacherSubjectsSem1Array[$i]; ?></td>
                <td><?php echo (!is_array($studGradesSem1Array)) ? $studGradesSem1Array : ((isset($studGradesSem1Array[$i])) ? $studGradesSem1Array[$i] : "no grade"); ?></td>

            </tr>
            <?php } ?>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <!-- sem2 table -->

    <table>
        <thead>
            <tr>
                <th>Subjects</th>
                <th>Q3</th>
                <th>Q4</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add your data rows here -->
            <?php for($i = 0; $i<count($teacherSubjectsSem2Array); $i++){    ?>
            <tr>
            <td><?php echo $teacherSubjectsSem2Array[$i]; ?></td>
            <td><?php echo (!is_array($studGradesSem1Array)) ? $studGradesSem1Array : ((isset($studGradesSem1Array[$i])) ? $studGradesSem1Array[$i] : "no grade"); ?></td>
            </tr>
            <?php } ?>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

            </body>
            </html>
            <?php
        } else {
          echo "Fetching Failed or this may not be your student";
        }
    }else{
        echo "Your not a teacher or login";
    }

}else{
    echo "Failed to get user";
}


?> 
