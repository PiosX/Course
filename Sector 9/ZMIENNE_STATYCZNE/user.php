<?php

    class user
    {
        private static $liczbaUserow = 0;
        public $id;

        public function __construct()
        {
            static $i = 0;
            $i++;
            echo $i."<br />";
            self::$liczbaUserow++;
            $this->id = self::$liczbaUserow;
        }

        public static function getLiczbaUserow()
        {
            return self::$liczbaUserow;
        }
    }
?>