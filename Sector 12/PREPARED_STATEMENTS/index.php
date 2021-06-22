<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - prepared statements</title>
</head>
<body>
    <?php
        try
        {
            class Klient
            {
                public $email;
                public $login;

                public function __construct($email, $login)
                {
                    $this->email = $email;
                    $this->login = $login;
                }
            }
            $options = array (
                PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'",
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
            $dbh = new PDO("mysql:host=localhost;dbname=kursmysql", "root", "", $options);

            //$klient = new Klient("test@abc.pl", "gosfsdc");
            //$haslo = $_GET['haslo'];
            //placeholder - zamienniki, zastepcze elementy
            $param = array(
                //$haslo
                "kotek"
            );
            //$stmt = $dbh->prepare("SELECT * FROM klienci WHERE haslo = ? AND login = ?");
            //$stmt = $dbh->prepare("SELECT * FROM klienci WHERE haslo = :haslo AND login = :login");
            $stmt = $dbh->prepare("INSERT INTO klienci (email,login) VALUES (:email, :login)");
            /*
            $haslo = "kotek";
            $login = "macciej";
            $stmt->bindParam("haslo",$haslo);
            $stmt->bindParam("login",$login);
            */
            //$stmt->bindValue(1, "kotek");
            //$stmt->bindValue(2, "macciej");
            /*
            $email = "test@abc.pl";
            $login = "gosc";
            $stmt->bindParam("email",$email, PDO::PARAM_STR);
            $stmt->bindParam("login",$login, PDO::PARAM_STR);
            */
            $klient = new Klient("mail1@com.pl", "jakislogin");
            $stmt->execute((array)$klient);
            $klient = new Klient("emaill@op.pl", "maaagg");
            $stmt->execute((array)$klient);
            
            echo $stmt->queryString."<br />";
            while($row = $stmt->fetchObject())
            {
                var_dump($row);
            }

            $stmt->closeCursor();

            $dbh = null; 
        }catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage();
        }
    ?>
</body>
</html>