<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
    try{
        $slogin = htmlentities($login, ENT_HTML5, "UTF-8");
        require_once "includes/connect.php";
        $db = new PDO($db_dsn, $db_user, $db_pass);
        $sql = "SELECT * FROM `users` WHERE `user` = ?";
        $query1 = $db->prepare($sql);
        $query1->bindParam(1, $slogin, PDO::PARAM_STR);
        $query1->execute();
        $result = $query1->fetch(PDO::FETCH_ASSOC);
        if($query1->rowCount() > 0){
            if(password_verify($pass, $result['pass'])){
                
            }else{
                $_SESSION['err'] = "Nieprawidłowy login lub hasło";
                header('Location: ../index.php');
            }
        }else{
            $_SESSION['err'] = "Nieprawidłowy login lub hasło";
            header('Location: ../index.php');
        }

    }catch(PDOException $e){
        $_SESSION['err'] = "BŁąd serwera";
        header('Location: ../index.php');
    }