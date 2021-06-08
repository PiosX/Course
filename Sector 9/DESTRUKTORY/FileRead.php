<?php
    class FileRead
    {
        protected $filePointer;
        protected $fileName;
        protected $isFileOpen = true;

        function __construct($fileName)
        {
            $this->fileName = $fileName;
           if(!($this->filePointer = @fopen($fileName, "r")))
           {
                $this->isFileOpen = false;
                throw new Exception("Plik o nazwie $fileName nie istnieje");
           }
        }
        function __destruct()
        {
            if($this->isFileOpen)
            {
                fclose($this->filePointer);
            }
        }
        function getWholeContent()
        {
            return fread($this->filePointer, filesize($this->fileName));
        }
    }
?>