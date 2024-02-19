<?php
    require_once("variabili_connessione.php");
    unset($_SESSION['idUtente']);
    unset($_SESSION['userName']);
    header("Location: index.php");
?>