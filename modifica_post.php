<?php
    if(isset($_POST['submit'])) 
    {
        $sql = "UPDATE tPost SET ";
        echo $sql;
        echo "<br>";
        $counter = 0;
        if(isset($_POST['titoloPost']) && strlen($_POST['titoloPost']) != 0)
        {
            $titoloPost = $_POST['titoloPost'];
            echo $titoloPost;
            $sql = $sql . "titoloPost = '$titoloPost'";
            echo $sql;
            echo "<br>";
            ++$counter;
        }
        if(isset($_POST['descrizionePost']) && strlen($_POST['descrizionePost']) != 0)
        {
            $descrizionePost = $_POST['descrizionePost'];
            if(substr($sql, -1) == "'")
                $sql = $sql . ", descrizionePost = '$descrizionePost'";
            else
                $sql = $sql . "descrizionePost = '$descrizionePost'";
            echo $sql;
            echo "<br>";
            ++$counter;
        }
        if(isset($_FILES['immaginePost']))
        {
            $dest = "img/".$_FILES['immaginePost']['name'];
            if(substr($sql, -1) == "'")
                $sql = $sql . ", pathFotoPost = '$dest'";
            else
                $sql = $sql . "pathFotoPost = '$dest'";
            echo $sql;
            echo "<br>";
            if (move_uploaded_file($_FILES['immaginePost']['tmp_name'], $dest)) {
                echo "Trasferito";
            }
            else {
                echo "Errore";
            }
            ++$counter;
        }

        /*if($counter == 0)
            header("Location: modifica_elimina.php");
        else
        {   
            require_once("variabili_connessione.php");
            $idPost = $_REQUEST['idPost'];
            $sql = $sql . " WHERE idPost = $idPost";
            mysqli_query($con, $sql);
            header("Location: index.php");
        }*/
        require_once("variabili_connessione.php");
            $idPost = $_REQUEST['idPost'];
            $sql = $sql . " WHERE idPost = $idPost";
            echo $sql;
            echo "<br>";
            mysqli_query($con, $sql);
            //header("Location: index.php");
    }
?>