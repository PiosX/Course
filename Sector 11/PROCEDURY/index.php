<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedury - tworzenie, modyfikacja, usuwanie, wywoływanie</title>
</head>
<body>
    <?php
        $conn = @mysqli_connect("localhost", "root", "", "kursmysql1") or die(mysqli_connect_error());

        mysqli_set_charset($conn, "utf8");

        $login = mysqli_real_escape_string($conn, "morfidon");

        $query = "Call pobierzZamowienia();";
        
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

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