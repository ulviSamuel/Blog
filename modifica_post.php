<?php
    require_once("variabili_connessione.php");
    if(isset($_POST['submit'])) 
    {
        $sql = "UPDATE tpost SET ";
        $counter = 0;
        if(isset($_POST['titoloPost']) && strlen($_POST['titoloPost']) != 0)
        {
            $titoloPost = $_POST['titoloPost'];
            $titoloPostFormattato = mysqli_real_escape_string($con, $titoloPost);
            $sql = $sql . "titoloPost = '$titoloPostFormattato'";
            ++$counter;
        }
        if(isset($_POST['descrizionePost']) && strlen($_POST['descrizionePost']) != 0)
        {
            $descrizionePost = $_POST['descrizionePost'];
            $descrizionePostFormattato = mysqli_real_escape_string($con, $descrizionePost);
            if(substr($sql, -1) == "'")
                $sql = $sql . ", descrizionePost = '$descrizionePostFormattato'";
            else
                $sql = $sql . "descrizionePost = '$descrizionePostFormattato'";
            ++$counter;
        }
        if(isset($_FILES['immaginePost']) && $_FILES['immaginePost']['size'] != 0)
        {
            $dest = "img/".$_FILES['immaginePost']['name'];
            if(substr($sql, -1) == "'")
                $sql = $sql . ", pathFotoPost = '$dest'";
            else
                $sql = $sql . "pathFotoPost = '$dest'";
            if (move_uploaded_file($_FILES['immaginePost']['tmp_name'], $dest)) {
                echo "Trasferito";
            }
            else {
                echo "Errore";
            }
            ++$counter;
        }

        if($counter == 0)
            header("Location: " . $_SERVER['HTTP_REFERER']);
        else
        {   
            $idPost = $_REQUEST['idPost'];
            $sql = $sql . " WHERE idPost = $idPost";
            mysqli_query($con, $sql);
            header("Location: index.php");
        }
    }
?>