<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pobieranie Danych</title>
</head>
<body>
    <?php
        class Customer
        {
            protected $id;
            protected $email;
            protected $login;
            private $cos;

            public function __construct($val1, $val2)
            {
                $this->cos = $val1." ".$val2; 
            }
            public function getCustomerInfo()
            {
                return "#$this->id: $this->email, $this->login, cos: $this->cos";
            }
        }
        try
        {
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'",
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
            $dbh = new PDO("mysql:host=localhost;dbname=kursmysql", "root", "", $options);
            
            $result = $dbh->query("SELECT id, email, login FROM klienci");

            //$result->setFetchMode(PDO::FETCH_ASSOC);
            //echo $result->fetchColumn(2);

            $tmp_arr = array(
                "test",
                "inny"
            );
            while($row = $result->fetchObject("Customer", $tmp_arr))
            {
                echo $row->getCustomerInfo()."<br />";
            }


            $result->setFetchMode(PDO::FETCH_INTO, new Customer);

            foreach($result as $customer)
            {
                echo $customer->getCustomerInfo()."<br />";
            }
            /*
            function intoTableRow($id, $email, $login)
            {
                return "<tr><td>$id</td></tr><tr><td>$email</td></tr><tr><td>$login</td></tr>";
            }
            $row = $result->fetchAll(PDO::FETCH_FUNC, "intoTableRow");
            
            var_dump($row);
            */
        /*
            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                var_dump($row);
            }
        */
        /*
            foreach($result as $key => $row)
            {
                foreach($row as $key => $value)
                {
                    echo $key.": ".$value."<br />";
                }
            }
        */
            
            $result->closeCursor();

            $dbh = null;
        }
        catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage();
        }
    ?>
</body>
</html>