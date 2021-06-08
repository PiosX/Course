<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception - wyjątki i ich obsługa</title>
</head>
<body>
    <?php
        require_once("FileRead.php");
        try
        {
            $reader = new FileRead("nazwapliku.txt");

            echo $reader->getWholeContent();
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }

    ?>
</body>
</html>