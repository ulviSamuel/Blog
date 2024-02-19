<?php
    require_once("variabili_connessione.php");
    $idPost = $_REQUEST['idPost'];
    $data = date("Y-m-d");
    
    $sql = "UPDATE tpost SET dataEliminazionePost = '$data' WHERE idPost = $idPost";
    mysqli_query($con, $sql);
    header("Location: index.php");
?>