<?php
    session_start();
    unset($_SESSION['idUtente']);
    unset($_SESSION['userName']);
    header("Location: index.php");
?>