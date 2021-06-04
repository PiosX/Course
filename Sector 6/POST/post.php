<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienna predefiniowana $_POST</title>
</head>
<body>
    <form action="odbierz.php" method="post" enctype="multipart/form-data">
        <div>
            <div>
                Login: <input type="text" name="login" maxlength="8" size="5" />
            </div>
            <div>
                Password: <input type="password" name="haslo" maxlength="15" size="5" />
            </div>
            <div>
                <input type="submit" value="Zaloguj się" />
            </div>
        </div>
    </form>
</body>
</html>