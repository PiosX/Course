<?php
    require_once("PermissionInterface.php");

    abstract class GuestAbstract implements PermissionInterface
    {
        protected $permission = 0;
        abstract function __construct();

        static function checkPermission($userPermission, $permission)
        {
            if($userPermission & $permission)
                return true;

            return false;
        }
        function getPermission()
        {
            return $this->permission;
        }
        function isPermitted($permission)
        {
            if($this->permission & $permission)
            {
                return true;
            }else
                return false;
        }
        function readPost($idOfPost)
        {
            if($this->isPermitted(PermissionInterface::READ_POST))
            {
                echo "czytam post o id = $idOfPost";
                return true;
            }else
                return false;
        }
        function writePost($textToWrite, $placeToWrite)
        {
            if($this->isPermitted(PermissionInterface::WRITE_POST))
            {
                $message = "$textToWrite został napisany w $placeToWrite";
                echo $message;
                return $message;
            }else
                return false;
        }
    }
?>