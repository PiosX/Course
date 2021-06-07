<?php
    require_once("AnimalAbstract.php");

    class Dog extends AnimalAbstract
    {
        protected $eatableFood = array("meat", "chicken");
    }
?>