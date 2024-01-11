<?php
print_r($_POST);

if (isset($_POST['download-qr'])) {
    $studQrName = (isset($_POST['student-qr-name'])) ? $_POST['student-qr-name'] : "failed to set student qr name";

    $filePath = "../../assets/qr/$studQrName" . ".png";
    if (file_exists($filePath)) {

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Content-Length: ' . filesize($filePath));

        // Clear output buffer to ensure no unintended output is sent
        ob_clean();

        // Flush the output buffer
        flush();
        // Read the file and output its contents
        readfile($filePath);
        exit;
    } else {
        // Handle the case when the file doesn't exist
        echo 'QR not found.';
    }
} else {
    echo "Failed to download qr";
}
