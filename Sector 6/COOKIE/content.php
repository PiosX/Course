<?php
    echo "Gratulacje zalogowales sie na konto: ".$_SESSION['login']."<br />";
    echo "PANEL ADMINISTRACYJNY<br />";
    if(isset($_COOKIE['ref']))
    {
        $ref = filter_var($_COOKIE['ref'], FILTER_SANITIZE_STRING);

        if($ref =="kazik")
        {
            //Operacje wynagradzajace kazika
            $_COOKIE['ref'] = NULL;
            setcookie("ref", NULL, -1, "/");
        }

        echo "Twoim polecającym jest: ".$ref."<br />";
    }

    echo "<a href='cookie.php'>Odśwież</a><br />";
    echo "<a href='cookie.php?akcja=wyloguj'>Wyloguj się</a><br />";
?>