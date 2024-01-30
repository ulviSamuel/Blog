<html>
    <head>
        <link rel="stylesheet" href="css/home_style.css">
    </head>

    <body>
        <?php 
            require_once("header.html");
            require_once("variabili_connessione.php");
            $sql = "SELECT idPost, titoloPost, descrizionePost, dataCreazionePost, pathFotoPost FROM tpost WHERE dataEliminazionePost IS NULL";
            $res = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    $idPost = $row["idPost"];
                    $titoloPost = $row["titoloPost"];
                    $descrizionePost = $row["descrizionePost"];
                    $dataCreazionePost = $row["dataCreazionePost"];
                    $pathFotoPost       = $row["pathFotoPost"];
                    echo "<a class='linkPost' href='dettaglio_post.php?idPost=$idPost'>";
                    echo "<div class='post'>";
                    echo "<div class='headerPost'>";
                    $dataFormattata = date("d-m-Y", strtotime($dataCreazionePost));
                    echo "<span class='dataPost'>$dataFormattata</span>";
                    echo "<h2 class='titoloPost'>$titoloPost</h2>";
                    echo "</div>";
                    echo "<div class='bodyPost'>";
                    echo "<p class='descrizionePost'>$descrizionePost</p>";
                    echo "<img class='fotoPost' src='$pathFotoPost' alt='foto post'>";
                    echo "</div>";
                    echo "</div>";
                    echo "</a>";
                }
            }
            else
                echo "<h1 id='noPost'>Non ci sono post</h1>";
            require_once("footer.html");
        ?>
    </body>
</html>