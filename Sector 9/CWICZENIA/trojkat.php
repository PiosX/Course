<?php

    class trojkat
    {
        public $podstawa;
        public $wysokosc;

        function __construct()
        {
            $this->podstawa = rand(1,40);
            $this->wysokosc = rand(1,40);
        }
        function poleTrojkata()
        {
            $pole = ($this->podstawa*$this->wysokosc)/2;
            echo "Podstawa: ".$this->podstawa."<br />";
            echo "Wysokość: ".$this->wysokosc."<br />";
            echo "Pole: ".$pole."<br />";
        }
    }
?>