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
        $dbh_c = @new mysqli("localhost", "root", "", "kursmysql1");

        if($dbh_c->connect_errno)
        {
            echo $dbh_c->connect_error;
            exit();
        }

        $dbh_c->set_charset("utf8");

        $login = $dbh_c->real_escape_string("morfidon");

        $result = $dbh_c->query("SELECT * FROM klienci WHERE login = '$login'");

        if($result->num_rows > 0)
        {
            echo $result->num_rows;
            while($row = $result->fetch_assoc())
            {
                var_dump($row);
            }
        }

        $result->free();

        $dbh_c->close();
    ?>
</body>
</html>