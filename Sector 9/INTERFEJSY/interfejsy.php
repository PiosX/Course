<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfejsy</title>
</head>
<body>
    <?php
        //INTERFACE - to takie reguły, rozkazy które muszą być spełnione w klasach w ktorych sa zaimplementowane, nie mozna tworzyc zmiennych w interfejsach tylko stałe
        echo EkranInterface::KOLOR;

        interface EkranInterface
        {
            const KOLOR = "szary";
            function wyswietl();
        }
        interface PrzyciskiInterface
        {
            function wlacz();
        }

        class MonitorA implements EkranInterface, PrzyciskiInterface
        {
            function wyswietl()
            {

            }
            function wlacz()
            {
                
            }
        }
        class MonitorB implements EkranInterface, PrzyciskiInterface
        {
            function wyswietl()
            {
                
            }
            function wlacz()
            {
                
            }
        }
    ?>
</body>
</html>