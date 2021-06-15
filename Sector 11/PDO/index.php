<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQLi Object Oriented Style</title>
</head>
<body>
    <?php

        @$db = new mysqli("localhost", "root", "", "kursmysql1");
        
        if($db->connect_errno)
        {
            echo $db->connect_error;
            exit();
        }
        
        $db->set_charset("utf8");


        $login = $db->real_escape_string("morfidon");
        
        $result = $db->query("SELECT * FROM klienci WHERE login = '$login'") or die($db->error);

        if($result->num_rows>0)
        {
            echo $result->num_rows;

            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                var_dump($row);
            }
        }

        $result->free();

        $db->close();
        
    ?>
</body>
</html>