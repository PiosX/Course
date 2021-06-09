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

use przestrzenPierwsza\user as PrzestrzenPierwszaUser;

require_once("user.php");

        class user
        {
            public $id = 50;
        }

        $a = new PrzestrzenPierwszaUser();

        echo $a->name;
    ?>
</body>
</html>