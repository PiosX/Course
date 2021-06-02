<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
        $a = 25;

        switch($a)
        {
            case 0:
                echo "a jest równe 0";
                break;
            case 25:
                echo "a jest równe 25";
                break;
            case 50:
                echo "a jest równe 50";
                break;
            default:
                echo "a na pewno nie jest równe 0, 25, 50";
        }
    ?>
</body>
</html>