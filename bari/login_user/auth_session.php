<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login_user\login.php");
        exit();
    }
?>
