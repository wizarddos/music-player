<?php 
    session_start();
    if(isset($_SESSION['loged'])){
        header("Location: loged.php");
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet"> 

    <title>Twoja muzyka w najlepszym miejscu</title>
</head>
<body>
    <main class = "mainform">
        <div class = "margin-div"></div>
            <article class = "form">
                <h1>Najlepszy magazyn muzyki<br/> Dla ciebie</h1>
                <form action="php/login.php" method="post">
                    <label>Login:<input type="text" name = "login" class = "input-login" placeholder="Login"></label>
                    <br/>
                    <br/>
                    <label>Hasło:<input type="password" name="pass" class = "input-login" placeholder="Hasło"></label>
                    <br/>
                    <br/>
                    <button type="submit" class = "submit">Zaloguj się</button>
                    <br/>
                    <?php
                            if(isset($_SESSION['err'])){
                                echo '<span class = "error">'.$_SESSION['err'].'</span>';
                                unset($_SESSION['err']);
                            }
                    ?>
                </form>
            </article>
    </main>


</body>
</html>