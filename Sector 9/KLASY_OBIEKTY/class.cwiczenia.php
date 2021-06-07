<?php
    class Cwiczenia
    {
        const DEFAULT_TIME_ZONE = "Europe/Warsaw";
        public $currentTime;
        public $futureTime;
        public $timeZone;

        function __construct($timeZone=self::DEFAULT_TIME_ZONE)
        {
            $this->timeZone = $timeZone;
            date_default_timezone_set($this->timeZone);
            $this->currentTime = $this->getCurrentTime();
        }
        function __toString()
        {
            return $this->currentTime;
        }
        function getCurrentTime($pattern="H:i:s d M Y")
        {
            $this->setTimeZone();
            return date($pattern, time());
        }
        function setFutureTime($days, $pattern="H:i:s d M Y")
        {
            $this->setTimeZone();
            $this->futureTime = date($pattern, strtotime("+ $days days"));
            return $this->futureTime;
        }
        function setTimeZone()
        {
            if($this->timeZone != date_default_timezone_get())
                date_default_timezone_set($this->timeZone);
        }

    }
?>