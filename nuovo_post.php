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
            echo "<h2 id='nomePagina'>Pagina di inserimento nuovo post</h2>";
        ?>
        <form method="POST" action="aggiungi_post_db.php" enctype="multipart/form-data">
            <label id="txtTitoloPost" for="inTitoloPost">Inserisci il titolo del post:</label>
            <input id="inTitoloPost" type="text" placeholder="Massimo 20 caratteri" name="titoloPost" maxlength="20" required>
            <label id="txtDescrizionePost" for="inDescrizionePost">Inserisci la descrizione del post:</label>
            <input id="inDescrizionePost" type="text" name="descrizionePost" required>
            <label id="txtImmaginePost" for="inImmaginePost">Inserisci l'immagine del post:</label>
            <input type="file" id="inImmaginePost" name="immaginePost" accept="image/jpeg, image/png" required>
            <input type="submit" value="Pubblica il Post" name="submit">
        </form>
        <a href="index.php">
            <button id="btnAnnullaIns">Annulla Inserimento</button>
        </a>
        <?php require_once("footer.html"); ?>
    </body>

</html>