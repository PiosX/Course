<?php
    require_once("AnimalAbstract.php");

    class Cat extends AnimalAbstract
    {
        protected $eatableFood = array("fish", "bird");
    }
?>