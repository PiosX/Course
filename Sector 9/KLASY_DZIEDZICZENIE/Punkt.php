<?php

    class Punkt
    {
        protected $x ; //mamy dostep do zmiennej z klasy ktora dziedziczy, ale nie mamy dostepu z instancji klasy

        public function __construct($x=0)
        {
            $this->x = $x;    
        }
        public function getX()
        {
            return $this->x;
        }
        public function setX($x)
        {
            if($x>50 || $x<0)
                echo "Wartość z poza zakresu.";
            else
                $this->x = $x;
        }
    }
?>