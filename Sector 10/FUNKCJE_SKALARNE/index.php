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

        mysqli_select_db($conn, "kursmysql1") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");

        $query = "
            SELECT length(login) FROM klienci
        ";

        //ABC() -> funkcja do wyznaczania wartosci bezwzglednej
        //ROUND() -> funkcja zaokraglujaca
        //POWER() -> podnosi liczbe do potegi
        //LENGTH() -> zwraca dlugosc stringa albo czegos
        //UCASE() -> zwraca stringa jako duze litery
        //LCASE() -> zwraca stringa jako male litery
        //trim() -> chroni przed tym zeby uzytkownik nie dawal spacji np. w loginie
        //ltrim() rtrim()
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
    ?>
</body>
</html>