<?php
    session_start();

    if(!isset($_SESSION['initiate'])) //ktos moze sie phpsessionid zalogowac wiec trzeba sie zabezpieczyc
    {
        session_regenerate_id(); //tworzy inna sesje
        $new_session_id = session_id(); //pobieranie id nowej sesji
        session_write_close(); //zamykanie obu sesji
        session_id($new_session_id);
        session_start();
        $_SESSION['initiate'] = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['akcja']) && $_GET['akcja'] == "wyloguj")
        {
            $_SESSION['zalogowany'] = 0;
            session_destroy();
            echo "Zostałeś wylogowany";
        }
        if((time()-$_SESSION['time']>5*60) && $_SESSION == 1)
        {
            $_SESSION['zalogowany'] = 0;
            session_destroy();
            echo "Zbyt długa nieaktywność. Prosimy o ponowne zalogowanie się.<br />";
        }
        if($_SESSION['zalogowany'] == 1 && ($_SESSION['info_o_komp'] != $_SERVER['HTTP_USER_AGENT']))
        {
            $_SESSION['zalogowany'] = 0;
            session_destroy();
            echo "Prosimy o ponowne zalogowanie się. Zmiana przeglądarki.";
        }
        if(isset($_POST['login']) && isset($_POST['haslo']) || $_SESSION['zalogowany'] == 1)
        {
            if((!empty($_POST['login']) && !empty($_POST['haslo'])) || $_SESSION['zalogowany'] == 1)
            {
                if($_SESSION['zalogowany'] == 0)
                {
                    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                    $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING);
                }
                

                if(($login == "Armon" && $haslo == "abc") || $_SESSION['zalogowany'] == 1)
                {
                    if($_SESSION['zalogowany'] == 0)
                        $_SESSION['login'] = $login;

                    echo "Gratulacje zalogowałeś się na konto: ".$_SESSION['login']."<br />";
                    echo "PANEL ADMINISTRACYJNY<br />";
                    echo "<a href='cwiczenia.php'>Odśwież</a><br />";
                    echo "<a href='cwiczenia.php?akcja=wyloguj'>Wyloguj</a>";
                    $_SESSION['zalogowany'] = 1;
                    $_SESSION['time'] = time();
                    $_SESSION['info_o_komp'] = $_SERVER['HTTP_USER_AGENT'];
                }else{
                    echo "Zły login lub hasło. Spróbuj ponownie <a href='cwiczenia.php'>tutaj</a>";
                }
            }else{
                echo "Nie podałeś loginu lub hasła. Spróbuj ponownie <a href='cwiczenia.php'>tutaj</a>";
            }
        }
        if($_SESSION['zalogowany'] == 0)
        {
    ?>
    <form action="cwiczenia.php" method="post" enctype="multipart/form-data">
        <div>
            <div>
                Login: <input type="text" name="login" maxlength="8" size="5" />
            </div>
            <div>
                Password: <input type="password" name="haslo" maxlength="15" size="5" />
            </div>
            <div>
                <input type="submit" value="Zaloguj się" />
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</body>
</html>