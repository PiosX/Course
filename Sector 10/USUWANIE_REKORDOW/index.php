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
        $conn = mysqli_connect("localhost", "root", "") or die("Brak połączenia z bazą danych");

        mysqli_select_db($conn, "kursmysql") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");


        $query = "
            DELETE FROM klienci WHERE login = '' OR haslo = '';
        ";

        mysqli_query($conn, $query) or die("Błąd zapytania");

        mysqli_close($conn);
    ?>
</body>
</html>