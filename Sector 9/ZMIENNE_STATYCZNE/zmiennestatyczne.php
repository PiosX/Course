<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne statyczne</title>
</head>
<body>
    <?php
        require_once("Customer.php");

        for($i=0;$i<10;$i++)
        {
            $a[$i] = new Customer();
        }

        //$a[]= new Customer();
        //echo $a[4]->id."<br />";
        echo Customer::getNumberCustomers();
    ?>
</body>
</html>