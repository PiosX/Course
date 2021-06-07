<?php
    require_once("x.php");

    class Y extends X
    {
        protected $y;

        public function __construct($x = 0, $y =0)
        {
            parent::__construct($x);
            $this->y = $y;
        }
        public function getY()
        {
            return $this->y;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
    }
?>