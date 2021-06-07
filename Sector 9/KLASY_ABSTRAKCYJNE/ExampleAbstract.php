<?php
    abstract class ExampleAbstract
    {
        protected $isHungry;
        function __construct($isHungry = true)
        {
            $this->isHungry = $isHungry;
        }
        function eat($food)
        {
            $isEatable = false;
            foreach($this->eatableFood as $value)
            {
                if($value == $food)
                {
                    $isEatable = true;
                    break;
                }
            }
            if($isEatable)
            {
                if($this->isHungry)
                {
                    echo "jem $food<br />";
                    $this->isHungry = false;
                }else
                    echo "Nie jestem głodny.<br />";
            }else
                echo "Nie jadam takich rzeczy jak $food.<br />";
        }
    }
?>