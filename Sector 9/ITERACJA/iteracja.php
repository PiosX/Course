<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iteracja</title>
</head>
<body><!--Iteracja czyli kolejne wykonywania pętli-->
    <?php
        class A implements Iterator
        {
/*            public $a = "one";
            protected $b = "two";
            private $c = "three";
*/
            private $tab = array(1=>"one", "two", "three", "four", "five");

            public function iterate()
            {
                foreach($this as $key=>$value)
                {      
                    if (is_array($value))
                    {
                        foreach($value as $key=>$value)
                        {
                            echo "key = $key <br />";
                            echo "value = $value <br /><br />";
                        }
                    }
                    else
                    {
                        echo "key = $key <br />";
                        echo "value = $value <br /><br />";
                    }
                }
            }
            public function current()
            {
                return current($this->tab);//wyswietla aktualna element
            }
            public function key()
            {
                return key($this->tab); // wyswietla aktualny klucz elementu
            }
            public function next()
            {
                next($this->tab); //przesuwa pozycje do nastepnego elementu
            }
            public function rewind()
            {
                reset($this->tab); //metoda wywoływana podczas startowania pętli, ustawia pozycje na startcie
            }
            public function valid()
            {
                return (key($this->tab) !== NULL && key($this->tab) !== FALSE); //sprawdza czy aktualna pozycja jest prawdziwa, czy wszystko jest okej
            }
        }

        $a = new A();

        //$a->iterate();

        $tab = array(1=>"one", "two", "three", "four", "five");


        foreach($a as $key => $value)
        {
            echo "key = $key <br />";
            echo "value = $value <br /><br />";
        }
    ?>
</body>
</html>