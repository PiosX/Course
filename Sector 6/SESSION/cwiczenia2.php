<?php
    session_start();

    if(!isset($_SESSION['initiate']))
    {
        session_regenerate_id();
        $new_session_id = session_id();
        session_write_close();
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
        if((time()-$_SESSION['time'] > 10*60) && $_SESSION['zalogowany'] == 1)
        {
            $_SESSION['zalogowany'] = 0;
            session_destroy();
            echo "Zostałeś wylogowany z powodu braku aktywności.";
        }
        if(isset($_GET['akcja']) && $_GET['akcja'] == "wyloguj")
        {
            $_SESSION['zalogowany'] = 0;
            session_destroy();
            echo "Zostałeś wylogowany.";
        }
        if($_SESSION['zalogowany'] == 1 && $_SESSION['info_o_komp'] != $_SERVER['HTTP_USER_AGENT'])
        {
            $_SESSION['zalogowany'] == 0;
            session_destroy();
            echo "Zostałeś wylogowany z powodu zmiany przegladarki lub komputera.";
        }
        if((isset($_POST['login']) && isset($_POST['haslo'])) || $_SESSION['zalogowany'] == 1)
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

                    echo "Witaj na stronie: ".$_SESSION['login']."<br />";
                    echo "PANEL ADMINISTRACYJNY<br />";
                    echo "<a href='cwiczenia2.php'>Odśwież</a><br />";
                    echo "<a href='cwiczenia2.php?akcja=wyloguj'>Wyloguj</a><br />";

                    $_SESSION['zalogowany'] = 1;
                    $_SESSION['time'] = time();
                    $_SESSION['info_o_komp'] = $_SERVER['HTTP_USER_AGENT'];
                }else{
                    echo "Niepoprawny login lub hasło. Prosimy spróbować jeszcze raz <a href='cwiczenia2.php'>tutaj</a>.";
                }
            }else{
                echo "Nie podano loginu lub hasła. Prosimy spróbować jeszcze raz <a href='cwiczenia2.php'>tutaj</a>.";
            }
        }
        if($_SESSION['zalogowany'] == 0)
        {
    ?>
    <form action="cwiczenia2.php" method="post" enctype="multipart/form-data">
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