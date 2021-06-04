<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona odbierajaca dane</title>
</head>
<body>
    <?php
        if(isset($_POST['login']) && isset($_POST['haslo']))
        {
            if(!empty($_POST['login']) && !empty($_POST['haslo']))
            {
                $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING);

                if($login == "Armon" && $haslo == "abc")
                {
                    echo "Gratulacje zalogowales sie na konto: ".$login;
                    echo "PANEL ADMINISTRACYJNY";
                }
                else{
                    echo "Podales niepoprawny login lub haslo. Spróbuj jeszcze raz <a href='post.php'>tutaj</a>";
                }   
            }
            else
                echo "Nie podales loginu lub hasla. Spróbuj jeszcze raz <a href='post.php'>tutaj</a>";
        }
        else
            echo "Nie został podany login lub haslo. Spróbuj jeszcze raz <a href='post.php'>tutaj</a>";
    ?>
</body>
</html>