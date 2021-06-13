<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwarka, Full Text Index</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="searched_words" value="<?php if(isset($_POST['searched_words'])) echo $_POST['searched_words']; else echo ""; ?>"/>
            <input type="submit" value="Szukaj" />
        </div>
    </form>
    <?php
    if(isset($_POST['searched_words']))
    {
        $conn = mysqli_connect("localhost", "root", "") or die("Brak połączenia z bazą danych");

        mysqli_select_db($conn, "kursmysql1") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");

        $searched_words=mysqli_real_escape_string($conn,$_POST['searched_words']);

        $query = "
            SELECT k.login, p.post_subject, p.post_text FROM klienci k JOIN
            (SELECT post_subject, post_text, poster_id, MATCH(post_text) AGAINST('$searched_words' WITH QUERY EXPANSION) AS trafnosc
            FROM posts 
            WHERE MATCH(post_text) AGAINST('$searched_words' WITH QUERY EXPANSION) ORDER BY trafnosc DESC) p
            ON p.poster_id = k.id
        ";
        //SELECT post_subject, post_text FROM posts WHERE MATCH(post_text) AGAINST('$searched_words')
        /*
            SELECT post_subject, post_text, MATCH(post_text) AGAINST('$searched_words') AS trafnosc
            FROM posts 
            WHERE MATCH(post_text) AGAINST('$searched_words') ORDER BY trafnosc DESC

        */
        //IN NATURAL LANGUAGE MODE - domyślne wyszukiwanie
        //BOOLEAN - można wykonywaćoperacje poniżej
        //WITH QUERY EXPANSION - wyszukuje tekst, dodaje propozycje wyszukań jeśli nie znajdzie tekstu

        // + wymaga danego słowa
        // - takie słowo nie może istnieć
        // > powieksza znaczenie danego slowa
        // < pomniejsza znaczenie danego slowa
        // ~ zmniejsza znaczenie calego wyszukania (bad words)
        // "" to co pomiedzy cytatami musi wystapic identycznie
        // () grupuje słowa aby móc nadać na parę słów np. >
        $result = mysqli_query($conn, $query) or die("Błąd zapytania");

        if(mysqli_num_rows($result)>0)
        {
            echo mysqli_num_rows($result);

            while($row = mysqli_fetch_assoc($result))
            {
                var_dump($row);
            }
        }
        mysqli_close($conn);
    }
    ?>
</body>
</html>