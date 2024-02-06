<?php
    if(isset($_POST['submit'])) 
    {
        if(isset($_POST['titoloPost']))
        {
            $titoloPost = $_POST['titoloPost'];
            if(isset($_POST['descrizionePost']))
            {
                $descrizionePost = $_POST['descrizionePost'];
                if(isset($_FILES['immaginePost']))
                {
                    $dest = "?".$_FILES['immaginePost']['name'];
                    $data = date("Y-m-d");
                    require_once("variabili_connessione.php");
                    $sql = "INSERT INTO tpost (titoloPost, descrizionePost, dataCreazionePost, pathFotoPost) VALUES ('$titoloPost', '$descrizionePost', '$data', '$dest')";
                    mysqli_query($con, $sql);
                    header("Location: index.php");
                }
            }
        }
    }
?>