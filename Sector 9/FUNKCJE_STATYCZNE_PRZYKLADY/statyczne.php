<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje statyczne oraz praktyczny przykład poznanych wiadomości</title>
</head>
<body>
    <?php
        require_once("Guest.php");
        require_once("User.php");
        require_once("Moderator.php");
        require_once("Admin.php");

        $g = new Guest();
        $u = new User();
        $m = new Moderator();
        $a = new Admin();

        //echo var_dump($m->isPermitted(Guest::DELETE_USER));

        //echo var_dump(Guest::checkPermission($g->getPermission(), PermissionInterface::WRITE_POST));
/*
        if(!$g->writePost("lala", "jakis tam"))
        {
            echo "Nie ma możliwości pisania.";
        }
*/
        $tab = array($g, $u, $m, $a);

        foreach($tab as $value)
        {
            if(!$value->writePost("to jest próbny tekst", "topic<br />"))
                echo "dany użytkownik nie może pisać postów<br />";
        }
    ?>
</body>
</html>