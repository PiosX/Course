<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator warunkowy</title>
</head>
<body>
    <?php
        $a = 55520;
        $b = 11110;

        // (WARUNEK) ? TO CO SIE ZNAJDUJE TU WYKONA SIE JEZELI TRUE : gdzy FALSE  to instrukcja znajduje sie tu;
        $wiadomosc = ($a > $b) ? "a jest wieksze od b" : "a jest mniejsze, badz rowne b";

        //echo $wiadomosc;

        echo (($a > $b) ? $a : $b)+40;

        $isGreenChecked = true;
        $isRedChecked = false;
        $isBlueChecked = true;

        echo "<input type='checkbox' name='kolor' value='green' ".($isGreenChecked ? "checked" : "")."/>Green<br />";
        echo "<input type='checkbox' name='kolor' value='red' ".($isRedChecked ? "checked" : "")."/>Red<br />";
        echo "<input type='checkbox' name='kolor' value='blue' ".($isBlueChecked ? "checked" : "")."/>Blue<br />";
    ?>
</body>
</html>