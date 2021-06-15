<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przejście z MySQL do MySQLi</title>
</head>
<body>
    <?php
        $conn = @mysqli_connect("localhost", "root", "", "kursmysql1") or die("Brak połączenia z bazą danych");

        mysqli_set_charset($conn, "utf8");

        $login = mysqli_real_escape_string($conn, "morfidon");
        
        $result = mysqli_query($conn, "SELECT * FROM klienci WHERE login = '$login'") or die("Błąd zapytania");

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