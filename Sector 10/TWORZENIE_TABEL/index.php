<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tworzenie tabel</title>
</head>
<body>
    <table border="1" cellspacing="0">
        <caption>Video Kursy</caption>
        <tr><th>Nazwa:</th><th>Cena brutto (zł) </th></tr>
        <tr><td>Video Kurs C++</td><td> 39 </td></tr>
        <tr><td>Video Kurs PHP</td><td> 37 </td></tr>
        <tr><td>Video Kurs Java</td><td> 39 </td></tr>
        <tr><td>Video Kurs JavaScript</td><td> 39 </td></tr>
    </table>
    <?php
        $mysqliConnection = @mysqli_connect("localhost", "root", "") or die ("Nie udało się nawiązać połączenia z bazą danych.");

        mysqli_select_db($mysqliConnection, "kursmysql") or die("Brak połączenia z bazą danych.");

        mysqli_set_charset($mysqliConnection,"utf8");

        mysqli_query($mysqliConnection,"
            CREATE TABLE klienci3
            (
                id INT UNSIGNED AUTO_INCREMENT,
                imie VARCHAR(20) NOT NULL,
                nazwisko VARCHAR(30) NOT NULL,
                login VARCHAR(30) NOT NULL,
                haslo VARCHAR(15) NOT NULL,
                wiek TINYINT NULL DEFAULT NULL,
                ref VARCHAR(100) NULL DEFAULT NULL COMMENT 'skąd przyszli klienci',
                PRIMARY KEY(id)
            )
            ") or die("Błąd zapytania");

        mysqli_close($mysqliConnection);
    ?>
</body>
</html>