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
    try
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'",
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
        );
        $dbh = new PDO("mysql:host=localhost;dbname=kursmysql", "root", "", $options);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $dbh = null;
    }catch(PDOException $e)
    {
        echo "Error: ".$e->getMessage();
    }
    ?>
</body>
</html>