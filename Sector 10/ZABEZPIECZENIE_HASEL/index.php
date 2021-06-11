<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zabezpieczenie haseł</title>
</head>
<body>
    <?php
        $conn = @mysqli_connect("localhost", "root", "") or die("Brak połączenia z bazą danych");

        mysqli_select_db($conn, "kursmysql") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");
        
        $salt = "sadfASdfasf$@#%#$3fesf@RH*7d^g&d";
/*
        $query = "
            UPDATE klienci_z_md5_z_sha512_z_sola SET haslo = SHA2(CONCAT('$salt',haslo), 512)
        ";
*/
        $login = mysqli_real_escape_string($conn, "jakislogin");
        $pw = "jhas!@#dsafDfF44";

        

/*
        $query = "
            INSERT INTO klienci_z_md5_z_sha512_z_sola (login, haslo) VALUES ('$login', '$pw');
        ";
*/
        //UPDATE klienci_z_sha512 SET haslo = SHA2(haslo, 512)
        //CONCAT('$salt', haslo) - łaczenie dwóch stringów 
        $query = "SELECT haslo, is_pw_changed FROM klienci_z_md5_z_sha512_z_sola WHERE login = '$login'";

        $result = mysqli_query($conn, $query) or die("Błąd zapytania!");

        if(mysqli_num_rows($result)>0)
        {
            $result = mysqli_fetch_assoc($result);

            $pwSha512 = hash("sha512", $salt.$pw);
            if($pwSha512 == $result['haslo'])
            {
                //LOGOWANIE
                echo "zalogowano, SHA512";
            }
            else if($result['is_pw_changed'])
            {
                $pwSha512Md5 = hash("sha512", $salt.md5($pw));

                if($pwSha512Md5 == $result['haslo'])
                {
                    mysqli_query($conn, "UPDATE klienci_z_md5_z_sha512_z_sola SET haslo = '$pwSha512', is_pw_changed = 1 WHERE login = '$login'") or die("Błąd zapytania!");
                    //logowanie
                    echo "zalogowano, SHA512 z md5";
                }else   
                {
                    echo "wrong pw";
                }
            }else
            {
                echo "wrong pw";
            }
        }

        mysqli_close($conn);
    ?>
</body>
</html>