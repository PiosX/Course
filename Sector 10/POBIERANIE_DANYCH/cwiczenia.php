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
        $conn = mysqli_connect("localhost", "root", "", "kursmysql") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn,"utf8");

        $query = "SELECT * FROM klienci";

        $result = mysqli_query($conn, $query) or die("Błąd zapytania.");

        if(mysqli_num_rows($result) > 0)
        {/*
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<table border=1 cellspacing=0>";
                echo "<tr><td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td></tr>";
                echo "</table>";
            }*/

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
        }

    ?>
</body>
</html>