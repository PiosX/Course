<?php
    require_once("AbstractEx.php");

    class z extends AbstractEx
    {
        function __construct()
        {
            $this->permission = InterfaceEx::READ | InterfaceEx::WRITE | InterfaceEx::DELETE;   
        }
    }
?>