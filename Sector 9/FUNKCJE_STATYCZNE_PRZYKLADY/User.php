<?php
    require_once("GuestAbstract.php");

    class User extends GuestAbstract
    {
        function __construct()
        {
            $this->permission = PermissionInterface::READ_POST | PermissionInterface::WRITE_POST;
        }
    }
?>