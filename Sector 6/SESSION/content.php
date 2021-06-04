<?php
    echo "Gratulacje zalogowales sie na konto: ".$_SESSION['login']."<br />";
    echo "PANEL ADMINISTRACYJNY<br />";
    echo "<a href='session.php'>Odśwież</a><br />";
    echo "<a href='session.php?akcja=wyloguj'>Wyloguj się</a><br />";
?>