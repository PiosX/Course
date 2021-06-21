<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - aktualizacja, usuwanie, dodawanie rekordów, quoting</title>
</head>
<body>
    <?php
        try
        {
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'",
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
            $dbh = new PDO("mysql:host=localhost;dbname=kursmysql", "root", "", $options);
        
            //$dana_z_zewnatrz = "cos zlego sagfhd";
            //echo $dbh->quote($dana_z_zewnatrz);

            //$result= $dbh->query("UPDATE produkty SET cena = 10 WHERE id=1 OR id=2");
            $result= $dbh->exec("INSERT INTO produkty (nazwa,cena) VALUES ('Video Kurs PDO', 19)");

            echo $result;
            //echo $result->rowCount();

            //$result->closeCursor();

            $dbh = null;
        }
        catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage();
        }
        
    ?>
</body>
</html>