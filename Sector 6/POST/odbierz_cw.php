<?php
    if(isset($_POST['login']) && isset($_POST['haslo']))
    {
        if(!empty($_POST['login']) && !empty($_POST['haslo']))
        {
            $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
            $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING);
            if($login == "pios" && $haslo == "abcd")
            {
                echo "Witaj na stronie: ".$login; 
            }else{
                echo "Niepoprawny login lub hasło. Spróbuj jeszcze raz <a href='cwiczenia.php'>tutaj</a>";
            }
        }else{
            echo "Nie został podany login lub hasło. Spróbuj jeszcze raz <a href='cwiczenia.php'>tutaj</a>.";
        }
    }else{
        echo "Nie został podany login lub hasło. Spróbuj jeszcze raz <a href='cwiczenia.php'>tutaj</a>";
    }
?>