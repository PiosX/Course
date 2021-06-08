<?php

    class FileR
    {
        protected $fileN;
        protected $isFileO = true;
        protected $pointer;

        function __construct($fileN)
        {
            $this->fileN = $fileN;
            if(!($this->pointer = @fopen($fileN, "r")))
            {
                $this->isFileO = false;
                throw new Exception("Plik o nazwie $fileN nie istnieje.<br />");
            }
                
        }
        function __destruct()
        {
            if($this->isFileO)
            {
                fclose($this->pointer);
            }
        }
        function Read()
        {
            return fread($this->pointer, filesize($this->fileN));
        }
    }
?>