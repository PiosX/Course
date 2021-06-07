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
        echo PilotInterface::PRZYCISK;
        echo ObudowaInterface::CHECK;

        interface PilotInterface
        {
            const PRZYCISK = "Naciśnięty<br />";
            function nacisnij();
        }
        interface ObudowaInterface
        {
            const CHECK = "dobra<br />";
            function wylacz();
        }
        class PilotA implements PilotInterface, ObudowaInterface
        {
            function nacisnij()
            {
                
            }
            function wylacz()
            {
                
            }
        }
        class PilotB implements PilotInterface, ObudowaInterface
        {
            function nacisnij()
            {
                
            }
            function wylacz()
            {
                
            }
        }
    ?>
</body>
</html>