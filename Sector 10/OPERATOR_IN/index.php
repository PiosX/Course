<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wybieranie danych przy pomocy operatora IN</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "") or die("Brak połączenia z bazą danych");

        mysqli_select_db($conn, "kursmysql1") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");

        $query = "
            SELECT email, wiek FROM klienci where wiek NOT IN (21, 33, 27)
        ";

        //SELECT email, wiek FROM klienci where wiek IN (21, 33, 27)
        //SELECT email, wiek FROM klienci where wiek NOT IN (21, 33, 27)
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