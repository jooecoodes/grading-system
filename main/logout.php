<?php 
    session_start();
    if(isset($_POST)) {
        session_destroy();
        unset($_SESSION['teacherId']);
        echo "Successfully logged out";
    }
?>