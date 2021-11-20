<?php
    session_start();
    if(isset($_SESSION['user_name'])){
        unset($_SESSION['user_username']);
        unset($_SESSION['user_id']);
        session_destroy();
        header("Location: login.php?timeout=1");
        exit();
    }
?>