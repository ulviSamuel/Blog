<?php
    if(isset($_POST['submit'])) 
    {
        if(isset($_POST['titoloPost']))
        {
            $titoloPost = $_POST['titoloPost'];
            $sql = "UPDATE tPost SET dataEliminazionePost = '$data' WHERE idPost = $idPost"
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
                    require_once("variabili_connessione.php");
                    $sql = "INSERT INTO tpost (titoloPost, descrizionePost, dataCreazionePost, pathFotoPost) VALUES ('$titoloPost', '$descrizionePost', '$data', '$dest')";
                    mysqli_query($con, $sql);
                    header("Location: index.php");
                }
            }
        }
    }
?>