<?php
ob_start(); // Start output buffering
require_once("../db_conn.php");
session_start();
if (isset($_SESSION['teacherId'])) {
    $firstName = isset($_SESSION['teacherFname']) ? $_SESSION['teacherFname'] : "teacher fname not set";
    $lastName = isset($_SESSION['teacherLname']) ? $_SESSION['teacherLname'] : "teacher lname not set";
    $fullName = $firstName . " " . $lastName;


    $sqlSelect = "SELECT * FROM attendance WHERE adviser = :adviserfullname";
    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute([
        ":adviserfullname" => $fullName
    ]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($stmt->rowCount() > 0) {
        echo "Successfully selected all attendance";
    } else {
        echo "No result";
    }

?>
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
        <div>
            <!-- Import  -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <label for="csvFile">Choose a CSV file:</label>
                <input type="file" name="csvFile" id="csvFile" accept=".csv">
                <button type="submit" name="submit">Import</button>
                <input type="hidden" name="import-attendance" value="1">
            </form>


            <table id="studTable">
                <thead id="studTableHead">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade Level</th>
                        <th>Section</th>
                        <th>Adviser</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <?php
                if (isset($_POST['import-attendance'])) {
                    // Check if a file is selected
                    if (!empty($_FILES['csvFile']['name'])) {
                        $file = $_FILES['csvFile']['tmp_name'];

                        // Read the CSV file
                        if (($handle = fopen($file, "r")) !== FALSE) {

                            // Read the headers
                            // $headers = fgetcsv($handle);
                            // echo "<td>";
                            // foreach ($headers as $header) {
                            //     echo "<td>$header</td>";
                            // }
                            // echo "</td>";

                            // Read the data rows

                            while (($data = fgetcsv($handle)) !== FALSE) {
                                echo "<tr>";
                                foreach ($data as $value) {
                                    echo "<td>$value</td>";
                                }
                                echo "</tr>";
                            }
                            fclose($handle);
                        } else {
                            echo "Error opening the CSV file.";
                        }
                    } else {
                        echo "Please choose a CSV file to upload.";
                    }
                } else {
                ?>

                    <tbody id="studTableBody">
                        <?php foreach ($results as $result) : ?>
                            <tr>
                                <td>
                                    <p><?= $result['id'] ?></p>
                                </td>
                                <td>
                                    <p><?= $result['fname'] ?></p>
                                </td>
                                <td>
                                    <p><?= $result['lname'] ?></p>
                                </td>
                                <td>
                                    <p><?= $result['grd_lvl'] ?></p>
                                </td>
                                <td>
                                    <p><?= $result['section'] ?></p>
                                </td>

                                <td>
                                    <p><?= $result['adviser'] ?></p>
                                </td>
                                <td>
                                    <p><?= $result['date'] ?></p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                <?php
                }

                ?>
            </table>

            <!-- Export  -->

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="export-attendance" value="1">
                <input type="submit" value="Export Attendance">
            </form>


            <?php

            if (isset($_POST['export-attendance'])) {
                $data = $results;
                $fileName = "csv-export";
                $contentDisposition = 'Content-Disposition: attachment; filename=" ' . $fileName . '.csv"';
                $path = "../../assets/csv/$fileName" . ".csv"; // specify the path to the CSV file
                $handle = fopen($path, "w"); // open the file in write mode
                foreach ($data as $row) { // loop through each row
                    fputcsv($handle, $row); // write the row to the file
                }

                header('Content-Type: text/csv');
                header($contentDisposition);
                fclose($handle); // close the file
            }



            ?>

        </div>

    </body>

    </html>
<?php
} else {
    echo "You're not logged in or authorized to access this page";
}



ob_end_flush(); // Flush output buffer and send to the browser
?>