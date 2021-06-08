<?php
    require_once("GuestAbstract.php");

    class Guest extends GuestAbstract
    {
        function __construct()
        {
            $this->permission = PermissionInterface::READ_POST;
        }
    }
?>