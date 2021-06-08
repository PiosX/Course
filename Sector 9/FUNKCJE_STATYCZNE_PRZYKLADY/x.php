<?php
    require_once("AbstractEx.php");

    class x extends AbstractEx
    {
        function __construct()
        {
            $this->permission = InterfaceEx::READ;
        }
    }
?>