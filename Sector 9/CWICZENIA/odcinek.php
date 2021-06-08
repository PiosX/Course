<?php
    
    class odcinek
    {
        public $poczatekX;
        public $koniecX;
        public $poczatekY;
        public $koniecY;

        function __construct($poczatekX, $koniecX, $poczatekY, $koniecY)
        {
            $this->poczatekX = $poczatekX;
            $this->koniecX = $koniecX;
            $this->poczatekY = $poczatekY;
            $this->koniecY = $koniecY;
        }
        function dlugoscOdcinka()
        {
            if($this->poczatekX >= $this->koniecX)
            {
                $dlX = $this->poczatekY - $this->koniecX;
            }else{
                $dlX = $this->koniecX - $this->poczatekX;
            }
            if($this->poczatekY >= $this->koniecY)
            {
                $dlY = $this->poczatekY - $this->koniecY;
            }
            else{
                $dlY = $this->koniecY - $this->poczatekY;
            }

            $dlOD = pow($dlX,2) + pow($dlY,2);

            echo "Długość odcinka wynosi: ".sqrt($dlOD)."<br />";
        }
    }
?>