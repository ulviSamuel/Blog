<html>
    <head>

    </head>

    <body>
        <?php 
            require_once("header.html");
            require_once("variabili_connessione.php");
            $sql = "SELECT titoloPost, descrizionePost, dataCreazionePost, pathFotoPost FROM tpost";
            $res = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($res))
            {
                $titoloPost = $row["titoloPost"];
                $descrizionePost = $row["descrizionePost"];
                $dataCreazionePost = $row["dataCreazionePost"];
                $pathFotoPost       = $row["pathFotoPost"];
                echo "<div class='post'>";
                echo "<span class='dataPost'>$dataCreazionePost</span>";
                echo "<h2 class='titoloPost'>$titoloPost</h2>";
                echo "<p class='descrizionePost'>$descrizionePost</p>";
                echo "<img class='fotoPost' src='$pathFotoPost' alt='foto post'>";
                echo "</div>";
            }
        ?>
    </body>
</html>