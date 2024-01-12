<?php
require_once("../db_conn.php");
session_start();

if (isset($_SESSION['teacherId'])) {
    $firstName = isset($_SESSION['teacherFname']) ? $_SESSION['teacherFname'] : "teacher fname not set";
    $lastName = isset($_SESSION['teacherLname']) ? $_SESSION['teacherLname'] : "teacher lname not set";
    $fullName = $firstName . " " . $lastName;

    if (isset($_POST['export-attendance'])) {
        $sqlSelect = "SELECT * FROM attendance WHERE adviser = :adviserfullname";
        $stmt = $conn->prepare($sqlSelect);
        $stmt->execute([
            ":adviserfullname" => $fullName
        ]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            // Generate CSV data
            $output = fopen('php://output', 'w');
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="export.csv"');
            fputcsv($output, array_keys($results[0])); // Output CSV header

            foreach ($results as $row) {
                fputcsv($output, $row);
            }

            fclose($output);
            exit;
        } else {
            echo "No result";
        }
    } else {
        echo "Export attendance error";
    }
} else {
    echo "Error detecting authorization";
}
