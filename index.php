<html>
    <head>
        <link rel="stylesheet" href="css/home_style.css">
        <?php session_start(); ?>
    </head>

    <body>
        <?php 
            require_once("header.html");
            echo "<div id='btnLoginRow'>";
            if(!isset($_SESSION['idUtente']))
            {
                echo "<h2 id='testoBenvenuto'>Benvenuto </h2>";
                echo "<a id='linkLogin' href='login.php'>";
                echo "<button id='btnLogin'>Login</button>";
                echo "</a>";
                echo "</div>";
                echo "<p id='testoPresentazione'>Blog Ulivi è una piattaforma online dedicata alla condivisione di post con la community. Ogni post offre la possibilità di includere un'immagine, un titolo e una descrizione.</p>";
            }
            else
            {
                echo "<h2 id='testoBenvenuto'>Benvenuto ".$_SESSION['userName']."</h2>";
                echo "<a id='linkLogin' href='logout.php'>";
                echo "<button id='btnLogin'>Logout</button>";
                echo "</a>";
                echo "</div>";
                echo "<a id='linkNuovoPost' href='nuovo_post.php'>";
                echo "<button id='btnNuovoPost'>Aggiungi Nuovo Post</button>";
                echo "</a>";
            }
            echo "<div id='rigaCerca'>";
            echo "<span id='testoRicerca'>Ricerca</span>";
            echo "<input id='bloccoInserisciTestoCerca' type='text' name='ricerca' placeholder='Parola chiave...'>";
            echo "<button onClick='btnCercaCliccato()' id='btnCerca'>Cerca</button>";
            echo "</div>";
            echo "<div id='rigaFiltroData'>";
            echo "<button id='annoPrecedente'>Anno Precedente</button>";
            if(isset($_GET['anno']))
                $annoCorrente = $_GET['anno'];
            else
                $annoCorrente = date("Y");
            echo "<span id='annoAttuale'>Anno $annoCorrente</span>";
            echo "<button id='annoSuccessivo'>Anno Successivo</button>";
            echo "</div>";
            if(isset($_GET['cerca']))
            {
                $parolaChiave = $_GET['cerca'];
                if(strlen($parolaChiave) > 0)
                    echo "<p id='risultatiPerTesto'>Risultati per '$parolaChiave'</p>";
            }
            require_once("variabili_connessione.php");
            $sql = "SELECT idPost, titoloPost, descrizionePost, dataCreazionePost, pathFotoPost FROM tpost WHERE dataEliminazionePost IS NULL AND YEAR(dataCreazionePost) = $annoCorrente";
            if(isset($_GET['cerca']))
                $sql .= " AND titoloPost LIKE '%" . $parolaChiave . "%'";
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
                    echo "<div class='post'>";
                    echo "<div class='headerPost'>";
                    $dataFormattata = date("d-m-Y", strtotime($dataCreazionePost));
                    echo "<span class='dataPost'>$dataFormattata</span>";
                    echo "<h2 class='titoloPost'>$titoloPost</h2>";
                    echo "</div>";
                    echo "<div class='bodyPost'>";
                    echo "<a class='linkPost' href='dettaglio_post.php?idPost=$idPost'>";
                    echo "<div class='imgDescrContainer'>";
                    echo "<p class='descrizionePost'>$descrizionePost</p>";
                    echo "<div class='spacer'></div>";
                    echo "<img class='fotoPost' src='$pathFotoPost' alt='foto post'>";
                    echo "</div>";
                    echo "</a>";
                    if(isset($_SESSION['idUtente']))
                    {                        
                        echo "<div class='btnEliminaModifica'>";
                        echo "<button onclick='btnModificaEliminaCliccato($idPost)' class='btnModificaElimina'>Modifica o Elimina</button>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</div>";
                }
            }
            else
                echo "<h1 id='noPost'>Non ci sono post corrispondenti alla ricerca</h1>";
            require_once("footer.html");
        ?>
        <script>
            function btnModificaEliminaCliccato(idPost)
            {
                window.location.href = "modifica_elimina.php?idPost="+idPost;
            }

            function btnCercaCliccato() {
                var campoCerca = document.getElementById("bloccoInserisciTestoCerca");
                var testoCerca = campoCerca.value;
                var url = "index.php";
                var separatori = "?";
                if (testoCerca.trim() !== "") {
                    url += separatori + "cerca=" + encodeURIComponent(testoCerca);
                    separatori = "&";
                }
                var annoAttuale = document.getElementById("annoAttuale").innerText.split(' ')[1];
                url += separatori + "anno=" + annoAttuale;
                window.location.href = url;
            }


            document.getElementById('annoPrecedente').addEventListener('click', function() {
                var annoCorrente = parseInt(document.getElementById('annoAttuale').innerText.split(' ')[1]);
                var nuovoAnno = annoCorrente - 1;
                window.location.href = aggiungiParametroGet('anno', nuovoAnno);
            });

            document.getElementById('annoSuccessivo').addEventListener('click', function() {
                var annoCorrente = parseInt(document.getElementById('annoAttuale').innerText.split(' ')[1]);
                var nuovoAnno = annoCorrente + 1;
                window.location.href = aggiungiParametroGet('anno', nuovoAnno);
            });

            function aggiungiParametroGet(parametro, valore) {
                var url = window.location.href;
                var nuovoParametro = parametro + '=' + valore;
                if (url.indexOf(parametro) !== -1) {
                    var espressioneRegolare = new RegExp('(' + parametro + '=\\d+)');
                    url = url.replace(espressioneRegolare, nuovoParametro);
                } else {
                    var separatori = url.indexOf('?') !== -1 ? '&' : '?';
                    url += separatori + nuovoParametro;
                }
                return url;
            }
        </script>
    </body>
</html>