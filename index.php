<html>
    <head>
        <link rel="stylesheet" href="css/home_style.css">
    </head>

    <body>
        <?php 
            require_once("header.html");
            require_once("variabili_connessione.php");
            $sql = "SELECT titoloPost, descrizionePost, dataCreazionePost, pathFotoPost FROM tpost WHERE dataEliminazionePost IS NULL";
            $res = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($res))
            {
                $titoloPost = $row["titoloPost"];
                $descrizionePost = $row["descrizionePost"];
                $dataCreazionePost = $row["dataCreazionePost"];
                $pathFotoPost       = $row["pathFotoPost"];
                echo "<div class='post'>";
                echo "<div class='headerPost'>";
                echo "<span class='dataPost'>$dataCreazionePost</span>";
                echo "<h2 class='titoloPost'>$titoloPost</h2>";
                echo "</div>";
                echo "<div class='bodyPost'>";
                echo "<p class='descrizionePost'>$descrizionePost</p>";
                echo "<img class='fotoPost' src='$pathFotoPost' alt='foto post'>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </body>
</html>