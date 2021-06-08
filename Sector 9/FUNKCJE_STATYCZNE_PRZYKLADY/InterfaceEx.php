<?php

    interface InterfaceEx
    {
        const READ = 1;
        const WRITE = 2;
        const DELETE = 4;

    function getPermissionEx();
    function isPermittedEx($permission);

    static function checkPermissionEx($user, $permission); //ta funkcja zawsze istnieje dzieki statycznosci, nawet bez obiektow
    }
?>