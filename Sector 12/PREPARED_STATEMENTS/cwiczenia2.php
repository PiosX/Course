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
            class Klient2
            {
                public $login;
                public $haslo;

                public function __construct($login,$haslo)
                {
                    $this->login = $login;
                    $this->haslo = $haslo;
                }
            }
            $options= array(
                PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'",
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );

            $dbh = new PDO("mysql:host=localhost;dbname=kursmysql", "root", "", $options);
            /*
            $stmt = $dbh->prepare("INSERT INTO klienci (login,haslo) VALUES (:login, :haslo)");

            $klient = new Klient2("Kozak", "tojesthaslo");

            $stmt->execute((array)$klient);
            */

            $stmt = $dbh->prepare("SELECT * FROM klienci");

            $stmt->execute();
            echo $stmt->queryString."<br />";
            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                var_dump($row);
            }
            $stmt->closeCursor();

            $dbh = null;
        }catch(PDOException $e)
        {
            echo "Error :".$e->getMessage();
        }
    ?>
</body>
</html>