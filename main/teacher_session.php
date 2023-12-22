<?php
        $teacherId = (isset($_SESSION['teacherId'])) ? $_SESSION['teacherId'] : "teacher id not set";
        $teacherToken = (isset($_SESSION['teacherToken'])) ? $_SESSION['teacherToken'] : "teacher token not set";
        $teacherStrand = (isset($_SESSION['teacherStrand'])) ? $_SESSION['teacherStrand'] : "teacher strand not set";
        $teacherSection = (isset($_SESSION['teacherSection'])) ? $_SESSION['teacherSection'] : "teacher section not set";
        $teacherGrdlvl = (isset($_SESSION['teacherGrdlvl'])) ? $_SESSION['teacherGrdlvl'] : "teacher grdlvl not set";
        $teacherFname = (isset($_SESSION['teacherFname'])) ? $_SESSION['teacherFname'] : "teacher Fname not set";
        $teacherLname = (isset($_SESSION['teacherLname'])) ? $_SESSION['teacherLname'] : "teacher lname not set";
        $teacherSubjectsSem1 = (isset($_SESSION['teacherSubjectsSem1'])) ? $_SESSION['teacherSubjectsSem1'] : "teacher sem1 not set";
        $teacherSubjectsSem2 = (isset($_SESSION['teacherSubjectsSem2'])) ? $_SESSION['teacherSubjectsSem2'] : "teacher sem2 not set";
        $teacherFullName = $teacherFname . ' ' . $teacherLname;
 
 

 ?>