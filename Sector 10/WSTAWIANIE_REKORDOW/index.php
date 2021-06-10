<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wstawianie rekordów do bazy</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "") or die("Brak połączenia z bazą danych");

        mysqli_select_db($conn, "kursmysql") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");

        $imie = "<script>alert(\'tralala\');</script>";
        $wiek = "34dasdasd";

        $imie = filter_var($imie, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_SPECIAL_CHARS jesli chcemy wyswietlac html'owskie tagi
        $wiek = (int)$wiek;

        echo $imie;
        echo $wiek;

        $query = "INSERT INTO klienci (imie, nazwisko, wiek, ref) VALUES ('$imie', 'Nowak', $wiek, NULL),
        ('Karol', 'Nowak', 34, 'http://udemy.pl');";

        mysqli_query($conn, $query) or die("Błąd zapytania");

        mysqli_close($conn);
    ?>
</body>
</html>