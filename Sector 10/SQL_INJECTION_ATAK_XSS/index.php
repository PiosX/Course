<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection oraz atak XSS</title>
</head>
<body>
    <?php
        $mysqliConnection = @mysqli_connect("localhost", "root", "") or die ("Nie udało się nawiązać połączenia z bazą danych.");

        mysqli_select_db($mysqliConnection, "kursmysql") or die("Brak połączenia z bazą danych.");

        mysqli_set_charset($mysqliConnection,"utf8");

        //$login = "morfidon";
        //$haslo= mysqli_real_escape_string($mysqliConnection,$_GET['haslo']);
        
        $var = filter_var("<script>alert('test')</script>", FILTER_SANITIZE_SPECIAL_CHARS);

        //echo $var;

        $query = "
            SELECT id,login FROM klienci 
        ";
/*
        $query = "
            INSERT INTO klienci (login) VALUES ('$var');
        ";
*/
        $result = mysqli_query($mysqliConnection, $query) or die("Błąd zapytania!");

        if (mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                foreach($row as $key => $value)
                {
                    echo "$key: ".filter_var($value, FILTER_SANITIZE_STRING)."<br />"; //htmlspecialchars($value)  ale lepiej filter_var na stringi //strip_tags($value, "<b>")
                    //HTML PURIFIER jeśli chcemy kod html w bazie danych, służy do filtracji, usuwa kod js na przyklad w tagach
                }
            }
        }

        mysqli_close($mysqliConnection);
    ?>
</body>
</html>