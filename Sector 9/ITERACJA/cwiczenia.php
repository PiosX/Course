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
        class A implements Iterator
        {
            public $a = "one";
            protected $b = "two";
            private $c = "three";

            private $tab = array(1=>"One", "Two", "Three", "Four", "Five");

            public function iterate()
            {
                foreach($this as $key=>$value)
                {
                    if(is_array($value))
                    {
                        foreach($value as $key=>$value)
                        {
                            echo "Key = $key <br />";
                            echo "Value = $value <br /><br />";
                        }
                    }else
                    {
                        echo "Key = $key <br />";
                        echo "Value = $value <br /><br />";
                    }     
                }
            }
            public function current()
            {
                return current($this->tab);
            }
            public function key()
            {
                return key($this->tab);
            }
            public function next()
            {
                next($this->tab);
            }
            public function rewind()
            {
                reset($this->tab);
            }
            public function valid()
            {
                return (key($this->tab) !== NULL && key($this->tab) !== FALSE);
            }
        }

        $a = new A();

        $tab = array("One", "Two", "Three", "Four", "Five");

        foreach($a as $key=>$value)
        {
            echo "Key = $key <br />";
            echo "Value = $value <br /><br />";
        }
        //$a->iterate();


    ?>
</body>
</html>