<?php
    require_once("AbstractEx.php");

    class y extends AbstractEx
    {
        function __construct()
        {
            $this->permission = InterfaceEx::READ | InterfaceEx::WRITE;   
        }
    }
?>