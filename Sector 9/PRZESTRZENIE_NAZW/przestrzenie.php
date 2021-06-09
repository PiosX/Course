<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przestrzenie nazw</title>
</head>
<body>
    <?php

use nazwaPrzestrzeni\customer as NazwaPrzestrzeniCustomer;

require_once("customer.php");

        class customer
        {
            public $id = 50;
        }
        $c = new NazwaPrzestrzeniCustomer;

        echo $c->nazwa;

    ?>
</body>
</html>