<html>
    <head>
        <link rel="stylesheet" href="css/login_style.css">
    </head>

    <body>
        <?php require_once("header.html"); ?>
        <div id="container">
            <span id='testoGuida'>Inserisci username e password per accedere</span>
            <form method="POST" action="index.php">
                <input id="username" type="text" name="username">
                <input id="password" type="text" name="password">
                <input id="submit" type="submit">
            </form>
        </div>
        <?php require_once("footer.html"); ?>
    </body>
</html>