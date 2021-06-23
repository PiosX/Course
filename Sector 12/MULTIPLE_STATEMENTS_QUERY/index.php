<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Multiple-statements query</title>
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

            $login = $_GET['login'];
            $id = $_GET['id'];
            $stmt = $dbh->prepare("SELECT * FROM zamowienia; 
            UPDATE klienci SET login = :login WHERE id = :id; 
            SELECT * FROM klienci");

            $stmt->bindParam('login', $login, PDO::PARAM_STR);
            $stmt->bindParam('id', $id, PDO::PARAM_INT);

            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();

            do
            {
                foreach($stmt as $row)
                {
                    var_dump($row);
                }
            }while($stmt->nextRowset());


            $stmt->closeCursor();
    

            $dbh = null;
        }catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage();
        }
    ?>
</body>
</html>