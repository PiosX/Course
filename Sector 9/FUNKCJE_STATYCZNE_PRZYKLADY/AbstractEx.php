<?php
    require_once("InterfaceEx.php");
//Implementuje interface zeby nie trzeba bylo tego pisac dla kazdego uzytkownika
    abstract class AbstractEx implements InterfaceEx
    {
        protected $permission = 0;
        abstract function __construct();

        static function checkPermissionEx($user, $permission)
        {
            if($user & $permission)
                return true;

            return false;
        }
        function getPermissionEx()
        {
            return $this->permission;
        }
        function isPermittedEx($permission)
        {
            if($this->permission & $permission)
            {
                return true;
            }else
                return false;
        }
        function read($idPost)
        {
            if($this->isPermittedEx(InterfaceEx::READ))
            {
                echo "Czytam post o id: $idPost";
            }else
                echo "Nie mam pozwolenia na czytanie.";
        }
        function write($text , $topic)
        {
            if($this->isPermittedEx(InterfaceEx::WRITE))
            {
                $message = "Napisałem: $text. O temacie: $topic.";
                return $message;
            }else
                return false;
        }
        function deleteEx($namePost)
        {
            if($this->isPermittedEx(InterfaceEx::DELETE))
            {
                echo "Usuwam post o nazwie: $namePost.";
                return true;
            }else
                return false;
        }
    } 
?>