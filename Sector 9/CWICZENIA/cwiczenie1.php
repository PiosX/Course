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
        require_once("trojkat.php");

        $p = new trojkat();
        $p2 = new trojkat();

        $p->poleTrojkata();
        $p2->poleTrojkata();

        if($p>$p2)
        {
            echo "Pierwszy trójkąt jest większy.";
        }else
            echo "Drugi trójkąt jest większy.";
    ?>
</body>
</html>