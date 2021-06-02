<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory bitowe- zastosowanie</title>
</head>
<body>
    <?php
        $readPost = 1;
        $writePost = 2;
        $deletePost = 4;
        $deleteUser = 5;
        $guest = $readPost;
        $user = $readPost | $writePost;
        $moderator = $readPost | $writePost | $deletePost;
        $admin = $readPost | $writePost | $deletePost | $deleteUser;
        /*
            0000000
            0000001 - czytanie
            0000010 - pisanie
            0000011 - czytanie i pisanie
            0000100 - usuwanie postow
            0001000 - usuwanie uzytkownikow

            0001111 - czytanie, usuwanie postow i uzytkownikow
            0000010 - pisanie
            0000010
        */

        if(checkPermission($admin, $writePost))
            writePost("Cześć jestem mistrzem");
        if(checkPermission($guest, $writePost))
            writePost("Cześć jestem spamerem");

        function writePost($contentOfPost)
        {
            echo $contentOfPost;
        }
        function checkPermission($user, $permission)
        {
            if($user & $permission)
                return true;

            return false;
        }

    ?>
</body>
</html>