<?php
    error_reporting(0);
    ini_set("display_errors", 0);
    
    session_start();
    session_destroy();

    header("location: ../login/index.php");
    exit();
?>