<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podstawy MySQL</title>
</head>
<body>
    <?php
        //mysqli_connect("nazwa_serwera:port", "login", "haslo")
        $mysqliConnection = @mysqli_connect("localhost", "root", "") or die("Nie udało się nawiązać połączenia z bazą danych.");

        mysqli_select_db($mysqliConnection, "kursmysql") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($mysqliConnection, 'utf8');

        $query = "
            UPDATE klienci SET
            wiek = 20
            WHERE ref IS NULL
        ";
        
        mysqli_query($mysqliConnection, $query);

        mysqli_close($mysqliConnection);
    ?>
</body>
</html>