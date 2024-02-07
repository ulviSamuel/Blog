<html>

    <head>
        <?php session_start(); ?>
    </head>

    <body>
        <?php
            require_once("header.html");
            echo "<h2 id='testoBenvenuto'>Benvenuto ".$_SESSION['userName']."</h2>";
            echo "<a id='linkLogin' href='logout.php'>";
            echo "<button id='btnLogin'>Logout</button>";
            echo "</a>";
            echo "</div>";
            echo "<h2 id='nomePagina'>Pagina di modifica del post</h2>";

            require_once("variabili_connessione.php");
            if(isset($_REQUEST['idPost']))
            {
                $sql = "SELECT idPost, titoloPost, descrizionePost FROM tpost WHERE idPost = ".$_REQUEST['idPost'];
                $res = mysqli_query($con, $sql);
                if(mysqli_num_rows($res) == 1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $idPost = $row['idPost'];
                    $titoloPost = $row['titoloPost'];
                    $descrizionePost = $row['descrizionePost'];
                    echo "<form method='POST' action='modifica_post.php'>";
                    echo "<label id='txtTitoloPost' for='inTitoloPost'>Inserisci il titolo del post:</label>";
                    echo "<input id='inTitoloPost' type='text' placeholder='$titoloPost' name='titoloPost'>";
                    echo "<label id='txtDescrizionePost' for='inDescrizionePost'>Inserisci la descrizione del post:</label>";
                    echo "<input id='inDescrizionePost' type='text' placeholder='$descrizionePost' name='descrizionePost'>";
                    echo "<label id='txtImmaginePost' for='inImmaginePost'>Inserisci l'immagine del post:</label>";
                    echo "<input type='file' id='inImmaginePost' name='immaginePost' accept='image/jpeg, image/png' required>";
                    echo "<input id='inImmaginePost' type='submit' name='submit' value='Modifica il Post'>";
                    echo "</form>";
                    echo "<button onclick='btnEliminaCliccato($idPost)'>Elimina il Post</button>";
                    echo "<button onclick='btnAnnullaCliccato()'>Annulla Modifiche e Torna alla Pagina Precedente</button>";
                }
                else
                    echo "<h1 id='noPost'>Post non trovato</h1>";
            }
            else
                echo "<h1 id='noPost'>Post non trovato</h1>";
        ?>
        
        <?php require_once("footer.html"); ?>

        <script>
            function btnAnnullaCliccato()
            {
                window.history.back();
            }

            function btnEliminaCliccato(idPost)
            {
                window.location.href = "elimina_post.php?idPost="+idPost;
            }
        </script>
    </body>

</html>