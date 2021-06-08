<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final class, finall method</title>
</head>
<body>
    <?php
    //to sie uzywa na przyklad jak nie chcemy zeby ktos nadpisywal mojego kodu, gdy sie naklada licencje, nie chcemy zeby ktos rozszerzal mojej klasy, funkcji
        class A
        {
            final function mA()
            {
                echo "to jest funkcja z klasy ".__CLASS__;
            }
        }
        class B extends A
        {
            
        }

        $b = new B();

        $b->mA();
    ?>
</body>
</html>