<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obsługa e-maili</title>
</head>
<body>
    <?php
        $do ="emailadresata@domena.pl";
        $temat = "Temat wiadomości";
        $tresc = "<b>Testowy</b> e-mail do $do o treści\n"."Tekst w następnej lini\n".
        "Jeszcze jedna linia";
        $tresc = wordwrap($tresc, 70);
        $tresc = str_replace("\n.", "\n..", $tresc);

        $naglowki = "Content-type: text/html;                  charset=UTF8\r\n".
                    "From: "."naszemail@domena.pl"."\r\n".
                    "Reply-to: "."naszemail@domena.pl"."\r\n";
        
        mail($do, $temat, $tresc, $naglowki);

        //text/plain interpretuje wszystko jako tekst
        // \r cofa wskaznik na poczatek a \n zaczyna nowa
    ?>
</body>
</html>