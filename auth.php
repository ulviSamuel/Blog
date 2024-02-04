<html>
    <head>
        <?php session_start(); ?>
    </head>

    <body>
        <?php
            if(isset($_POST['username']))
            {
                $username = $_POST['username'];
                if(isset($_POST['password']))
                {
                    $password = $_POST['password'];
                    require_once("variabili_connessione.php");
                    $sql = "SELECT idUtente, userName FROM tutente WHERE userName = '$username' AND passWord = '$password'";
                    $res = mysqli_query($con, $sql);
                    if(mysqli_num_rows($res) == 1)
                    {
                        $row = mysqli_fetch_assoc($res);
                        $_SESSION['idUtente'] = $row['idUtente']; 
                        $_SESSION['userName'] = $row['userName']; 
                        header("Location: index.php");
                    }
                    else
                        header("Location: login.php?error=true");
                }
                else
                    header("Location: login.php?error=true");  
            }
            else
                header("Location: login.php?error=true");
        ?>
    </body>
</html>