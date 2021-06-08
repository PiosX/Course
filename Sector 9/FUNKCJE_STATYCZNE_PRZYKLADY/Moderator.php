<?php
    require_once("GuestAbstract.php");

    class Moderator extends GuestAbstract
    {
        function __construct()
        {
            $this->permission = PermissionInterface::READ_POST | PermissionInterface::WRITE_POST | PermissionInterface::DELETE_POST;
        }
    }
?>