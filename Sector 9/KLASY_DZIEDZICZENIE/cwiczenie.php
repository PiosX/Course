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
        require_once("z.php");

        $c = new Z(70, 40, 20);
        
        echo $c->getX()."<br />";
        echo $c->getY()."<br />";
        echo $c->getZ()."<br />";
    ?>
</body>
</html>