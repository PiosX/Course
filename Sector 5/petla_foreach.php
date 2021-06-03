<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla foreach - operacje na tablicach</title>
</head>
<body>
    <?php
        for($i=0;$i<10;$i+=2)
        {
            $tab[] = $i;
        }

        for($i=0;$i<count($tab);$i++)
        {
            echo $tab[$i]."<br />";
        }

        $tab["imie"] = "Arkadiusz";
        $tab["nazwisko"] = "Nowak";

        echo $tab["imie"]."<br />";

        foreach($tab as $key => $value)
        {
            echo $tab[$key]."<br />";
        }

        foreach($tab as $value)
        {
            echo $value."<br />";
        }
    ?>
</body>
</html>