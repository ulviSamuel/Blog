<?php
    require_once("variabili_connessione.php");
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
                    $dest = "img/".$_FILES['immaginePost']['name'];
                    if (move_uploaded_file($_FILES['immaginePost']['tmp_name'], $dest)) {
                        echo "Trasferito";
                    }
                    else {
                        echo "Errore";
                    }
                    $data = date("Y-m-d");
                    $titoloPostFormattato = mysqli_real_escape_string($con, $titoloPost);
                    $descrizionePostFormattato = mysqli_real_escape_string($con, $descrizionePost);
                    $sql = "INSERT INTO tpost (titoloPost, descrizionePost, dataCreazionePost, pathFotoPost) VALUES ('$titoloPostFormattato', '$descrizionePostFormattato', '$data', '$dest')";
                    mysqli_query($con, $sql);
                    header("Location: index.php");
                }
            }
        }
    }
?>