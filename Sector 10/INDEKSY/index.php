<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indeksy, indeksy złożone</title>
</head>
<body>
    <?php
        require_once("generator.php");
        $mysqliConnection = @mysqli_connect("localhost", "root", "") or die("Nie udało się nawiązać połączenia z bazą danych.");

        mysqli_select_db($mysqliConnection, "kursmysql") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($mysqliConnection, 'utf8');

        $query = "
            LOAD DATA LOCAL INFILE 'data.txt' INTO TABLE test
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            (x,y,z)
        ";

        //mysqli_query($mysqliConnection, $query) or die("Błąd zapytania!");
        
        //generateNumbers();

        $time = microtime(true);
        for($i=0;$i<1;$i++)
        mysqli_query($mysqliConnection,"
            SELECT * FROM test WHERE x=30 AND y=50;
        ") or die ("Błąd zapytania!");

        $result = microtime(true) - $time;

        echo $result;
        mysqli_close($mysqliConnection);
    ?>
</body>
</html>