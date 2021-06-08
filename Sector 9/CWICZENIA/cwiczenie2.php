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
        require_once("odcinek.php");

        $o1 = new odcinek(1,3,1,4);
        $o2 = new odcinek(1,4,1,5);

        $o1->dlugoscOdcinka();
        $o2->dlugoscOdcinka();

        if($o1>$o2)
        {
            echo "Pierwszy odcinek jest większy.";
        }else
            echo "Drugi odcinek jest większy.";
    ?>
</body>
</html>