<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typy i operacje związane z czasem</title>
</head>
<body>
    <?php
        $mysqliConnection = @mysqli_connect("localhost", "root", "") or die("Nie udało się nawiązać połączenia z bazą danych.");

        mysqli_select_db($mysqliConnection, "kursmysql") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($mysqliConnection, 'utf8');

        /*
                 YEAR - 1 bajt zakres: 1901 - 2155; format YYYY lub YY
             *   DATE - 3 bajty; format: YYYY-MM-DD 
             *   DATETIME - 8 bajtów: format: YYYY-MM-DD hh:mm:ss - od 1000 do 9999 roku
             *   TIMESTAMP - 4 bajty: format: YYYY-MM-DD hh:mm:ss - możliwe wartości tylko większe od początku epoki unixowej
             *   TIME - 3 bajty; zakres od -839:59:59 do plus 839:59:59
             * 
             *   LEGENDA FORMATOWANIA:
             *   Y - rok (year)
             *   M - miesiąc (month)
             *   D - dzień (day)
             *   h - godzina (hour)
             *   m - minute (minuta)
             *   s - sekunda (second)
             * 
             * FUNKCJE:
             * http://dev.mysql.com/doc/refman/5.5/en/date-and-time-functions.html#function_makedate
             *    NOW() - aktualna data i czas
             *    CURDATE() - aktualna data
             *    CURTIME() - aktualny czas (przy INSERT działa tylko z TIME)
             *    DATE(dana_czasowa) - zwraca tylko datę
             *    EXTRACT(Jednostka FROM dana_czasowa) - wyciąga jednostkę z dana_czasowa np. MONTH
             *    DATE_ADD(dana_czasowa, INTERVAL ilość Jednostka) - dodaje do dana_czasowa ilość Jednostka
             *    DATE_SUB(dana_czasowa, INTERVAL ilość Jednostka) - odejmuje od dana_czasowa ilość Jednostka
             * 
             *    DATEDIFF(dana_czasowa1, dana_czasowa2) - zwraca (dana_czasowa1 - dana_czasowa2) w dniach
             *    DATE_FORMAT(dana_czasowa, wzór) - formatuje w inny sposób wygląd danej_czasowej
             * 
             *    MAKEDATE(rok, dzien_w_roku) - można użyć MAKEDATE(rok, DAYOFYEAR(dana_czasowa)), dana_czasowa np. '1989-09-01'
             * 
             *    UNIX_TIMESTAMP - mysql_version TIMESTAMP to time()
             *    FROM_UNIXTIME - time() do mysql_version TIMESTAMP
             * 
             *    epoka unixowa zaczyna się od:
             *    1970-01-01 00:00:00 
        */
        
        $query = "
            SELECT MAKEDATE(1990,256);
        ";
        //SELECT NOW() AS aktualna_data from czas
        //INSERT INTO czas (year, date, datetime, time, timestamp) VALUES (1990, '1990-01-01', '1990-01-01 12:12:12', '12:12:12', '1990-01-01 12:12:12');
        //INSERT INTO czas (nazwa, year, date, datetime, time, timestamp) VALUES ('NOW', NOW(), NOW(), NOW(), NOW(), NOW());
        //SELECT DATE(timestamp) AS data, time AS czas FROM czas;
        //SELECT timestamp FROM czas WHERE timestamp > DATE('1990-01-02');
        //SELECT EXTRACT(YEAR FROM timestamp) AS lata FROM czas;
        //SELECT creation FROM czas WHERE creation > DATE_SUB(NOW(), INTERVAL 10 DAY);
        //SELECT DATEDIFF(NOW(), timestamp) AS zarejestrowany_od FROM czas;
        //SELECT DATE_FORMAT(timestamp, '%m %D %Y') AS data FROM czas;
        //SELECT UNIX_TIMESTAMP(timestamp) AS data FROM czas;
        //INSERT INTO czas (year, date, datetime, time, timestamp) VALUES (FROM_UNIXTIME(".time()."), FROM_UNIXTIME(".time()."), FROM_UNIXTIME(".time()."), FROM_UNIXTIME(".time()."), FROM_UNIXTIME(".time()."));
        $result = mysqli_query($mysqliConnection, $query) or die("Błąd zapytania!");

        date_default_timezone_set("Europe/Warsaw");
        if(mysqli_num_rows($result)>0)
        {
            

            while($row = mysqli_fetch_assoc($result))
            {
                foreach($row as $key => $value)
                {
                    //echo "$key: ".date("Y-m-d H:i:s",$value)."<br />";
                    echo "$key: $value<br />";
                }
            }
            
        }

        mysqli_close($mysqliConnection);
    ?>
</body>
</html>