<?php require_once("variabili_connessione.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="css/dettaglio_post_style.css">
    </head>

    <body>
        <?php 
            require_once("header.html");
            if(isset($_GET['idPost']))
            {
                $idPost = $_GET['idPost'];
                $sql = "SELECT idPost, titoloPost, descrizionePost, dataCreazionePost, pathFotoPost FROM tpost WHERE idPost = $idPost AND dataEliminazionePost IS NULL";
                $res = mysqli_query($con, $sql);
                if(mysqli_num_rows($res) == 1)
                {
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $idPost = $row["idPost"];
                        $titoloPost = $row["titoloPost"];
                        $descrizionePost = $row["descrizionePost"];
                        $dataCreazionePost = $row["dataCreazionePost"];
                        $pathFotoPost       = $row["pathFotoPost"];
                        echo "<div class='headerPost'>";
                        $paginaPrecedente = $_SERVER['HTTP_REFERER'];
                        echo "<a href='$paginaPrecedente'>";
                        echo "<button class='btnTornaIndietro'>Torna alla pagina precedente</button>";
                        echo "</a>";
                        echo "<h2 class='titoloPost'>$titoloPost</h2>";
                        $dataFormattata = date("d-m-Y", strtotime($dataCreazionePost));
                        echo "<span class='dataPost'>$dataFormattata</span>";
                        if(!isset($_SESSION['idUtente']))
                        {
                            echo "<a href='login.php'>";
                            echo "<button class='btnLogin'>Login</button>";
                            echo "</a>";
                        }
                        echo "</div>";
                        echo "<img class='fotoPost' src='$pathFotoPost' alt='foto post'>";
                        echo "<p class='descrizionePost'>$descrizionePost</p>";
                    }
                }
                else
                    echo "<h1 id='noPost'>Post non trovato</h1>";
            }
            else
                echo "<h1 id='noPost'>Post non trovato</h1>";
            
            require_once("footer.html");
        ?>
    </body>
</html>