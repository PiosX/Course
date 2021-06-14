<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF - Warunki w zapytaniu</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "") or die("Brak połączenia z bazą danych");

        mysqli_select_db($conn, "kursmysql1") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");

        // IF(wyrazenie,'tocossiepojawijesliwyrazeniejestprawdziwe', 'tocossiepojawijesliwyrazeniejestfalszywe')
        $query = "
            SELECT sum(IF(newsletter = 0, 1, 0)) notsigned, sum(IF(newsletter = 1, 1, 0)) signed FROM klienci
        ";

        /*
            SELECT (SELECT count(newsletter) FROM klienci WHERE newsletter = 0) notsigned,
            (SELECT count(newsletter) FROM klienci WHERE newsletter = 1) signed

            SELECT sum(IF(newsletter = 0, 1, 0)) notsigned, sum(IF(newsletter = 1, 1, 0)) signed FROM klienci
        */
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