<?php

    class Customer
    {
        private static $numberOfCustomers = 0;
        public $id;

        public function __construct()
        {
            static $i = 0;
            $i++;
            echo $i."<br />";
            self::$numberOfCustomers++;
            $this->id = self::$numberOfCustomers;
        }
        public static function getNumberCustomers()
        {
            return self::$numberOfCustomers;
        }
    }
?>