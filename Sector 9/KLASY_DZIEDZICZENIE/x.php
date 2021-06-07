<?php
   
   class X
   {
        protected $x;

        public function __construct($x = 0)
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
                echo "Liczba z poza zakresu";
            else
                $this->x = $x;
        }
   }
    
?>