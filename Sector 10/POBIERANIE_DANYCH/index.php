<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pobieranie danycht</title>
</head>
<body>
    <?php
        $mysqliConnection = @mysqli_connect("localhost", "root", "", "kursmysql") or die ("Brak połączenie z bazą danych.");
        mysqli_set_charset($mysqliConnection, "utf8");
        /*  * gwiazdka oznacza wybranie wszystkich pól (jest to wolniejsze)
            SELECT pole1,pole2,pole3
            FROM nazwaTabeli
            WHERE warunek
            LIKE
            ORDER BY ASC - rosnąco(domyślnie), ORDER BY DESC - malejąco
        */
        $query = "
            SELECT * FROM klienci
        ";

        $result = mysqli_query($mysqliConnection, $query) or die("Błąd zapytania.");

        if(mysqli_num_rows($result) > 0)
        {
            echo "ilość wierszy: ".mysqli_num_rows($result)."<br />";
            echo "ilość pól: ".mysqli_num_fields($result)."<br />";

            //$row = mysqli_fetch_array($result, MYSQLI_ASSOC); // MYSQLI_ASSOC - asocjacyjne tablice, MYSQLI_NUM - numeryczne, MYSQLI_BOTH - obie na raz(default)
            //$row = mysqli_fetch_row($result); // - MYSQLI_NUM
            
            /*
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<table border=1 cellspacing=0 style='float: left; margin: 10px;'>";
                echo "<tr><td>Id: ".$row['id']."</td></tr>";
                echo "<tr><td>Login: ".$row['login']."</td></tr>";
                echo "<tr><td>Hasło: ".$row['haslo']."</td></tr>";
                echo "<tr><td>Imię: ".$row['imie']."</td></tr>";
                echo "<tr><td>Nazwisko: ".$row['nazwisko']."</td></tr>";
                echo "<tr><td>Wiek: ".$row['wiek']."</td></tr>";
                echo "<tr><td>Ref: ".$row['ref']."</td></tr>";
                echo "</table>";
            }
            */
            /*
            for($i=0;$i < mysqli_num_rows($result); $i++)
            {
                $row = mysqli_fetch_assoc($result);
                echo "<table border=1 cellspacing=0 style='float: left; margin: 10px;'>";
                echo "<tr><td>Id: ".$row['id']."</td></tr>";
                echo "<tr><td>Login: ".$row['login']."</td></tr>";
                echo "<tr><td>Hasło: ".$row['haslo']."</td></tr>";
                echo "<tr><td>Imię: ".$row['imie']."</td></tr>";
                echo "<tr><td>Nazwisko: ".$row['nazwisko']."</td></tr>";
                echo "<tr><td>Wiek: ".$row['wiek']."</td></tr>";
                echo "<tr><td>Ref: ".$row['ref']."</td></tr>";
                echo "</table>";
            }
            */

            for($i=0;$i<mysqli_num_rows($result); $i++)
            {
                $row = mysqli_fetch_assoc($result);
                echo "<table border=1 cellspacing=0 style='float: left; margin: 10px;'>";
                foreach($row as $key => $value)
                {
                    if($key == 'haslo')
                        continue;
                    echo "<tr><td>".ucfirst($key).": $value</td></tr>";
                }
                echo "</table>";
            }
            /*
                $obj = mysqli_fetch_object($result);

                echo $obj->imie;
            */
        }

        mysqli_close($mysqliConnection);
    ?>
</body>
</html>
