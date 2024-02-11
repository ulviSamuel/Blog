<html>

    <head>
        <?php
            session_start(); 
            if (!isset($_SESSION['idUtente'])) {
                header("Location: index.php");
                exit;
            }
         ?>
         <link rel="stylesheet" href="css/modifica_elimina.css">
    </head>

    <body>
        <?php
            require_once("header.html");
            echo "<div id='btnLoginRow'>";
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
                    echo "<form method='POST' action='modifica_post.php?idPost=$idPost' enctype='multipart/form-data'>";
                    echo "<div class='input-row'>";
                    echo "<label id='txtTitoloPost' for='inTitoloPost'>Inserisci il titolo del post:</label>";
                    echo "<input id='inTitoloPost' type='text' placeholder='$titoloPost' name='titoloPost' minlength='4' maxlength='50'>";
                    echo "</div>";
                    echo "<div class='input-row'>";
                    echo "<label id='txtDescrizionePost' for='inDescrizionePost'>Inserisci la descrizione del post:</label>";
                    echo "<input id='inDescrizionePost' type='text' placeholder='$descrizionePost' name='descrizionePost' minlength='100' maxlength='1000'>";
                    echo "</div>";
                    echo "<div class='input-row'>";
                    echo "<label id='txtImmaginePost' for='inImmaginePost'>Inserisci l'immagine del post:</label>";
                    echo "<input type='file' id='inImmaginePost' name='immaginePost' accept='image/jpeg, image/png'>";
                    echo "</div>";
                    echo "<div id='row-buttons'>";
                    echo "<div id='row-mod-del'>";
                    echo "<input type='submit' name='submit' value='Modifica il Post'>";
                    echo "</form>";
                    echo "<input type='button' onclick='btnEliminaCliccato($idPost)' value='Elimina il Post'>";
                    echo "</div>";
                    echo "<input type='button' onclick='btnAnnullaCliccato()' value='Annulla Modifiche e Torna alla Pagina Precedente'>";
                    echo "</div>";
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