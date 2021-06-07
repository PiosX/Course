<?php
    
    abstract class AnimalAbstract
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
                    echo "Nie jestem głody.<br />";
            }else
                echo "ja nie jem $food";
        }
    }
?>