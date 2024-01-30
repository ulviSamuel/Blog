<html>
    <head>
        <link rel="stylesheet" href="css/dettaglio_post_style.css">
    </head>

    <body>
        <?php require_once("header.html"); ?>
        <?php
            require_once("variabili_connessione.php");
            if(isset($_GET['idPost']))
            {
                $idPost = $_GET['idPost'];
                $sql = "SELECT idPost, titoloPost, descrizionePost, dataCreazionePost, pathFotoPost FROM tpost WHERE idPost = $idPost";
                $res = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($res))
                {
                    $idPost = $row["idPost"];
                    $titoloPost = $row["titoloPost"];
                    $descrizionePost = $row["descrizionePost"];
                    $dataCreazionePost = $row["dataCreazionePost"];
                    $pathFotoPost       = $row["pathFotoPost"];
                    echo "<div class='headerPost'>";
                    echo "<a href='index.php'>";
                    echo "<button class='btnTornaIndietro'>Torna alla pagina iniziale</button>";
                    echo "</a>";
                    echo "<h2 class='titoloPost'>$titoloPost</h2>";
                    $dataFormattata = date("d-m-Y", strtotime($dataCreazionePost));
                    echo "<span class='dataPost'>$dataFormattata</span>";
                    echo "<a href='login.php'>";
                    echo "<button class='btnLogin'>Login</button>";
                    echo "</a>";
                    echo "</div>";
                    echo "<img class='fotoPost' src='$pathFotoPost' alt='foto post'>";
                    echo "<p class='descrizionePost'>$descrizionePost</p>";
                }
            }
            else
                echo "<h1 id='noPost'>Post non trovato</h1>";
            
            require_once("footer.html");
        ?>
    </body>
</html>