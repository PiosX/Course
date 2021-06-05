<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienna predefioniowana $_FILES</title>
</head>
<body>
    <form action="files.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="MAX_FILE_SIZE" value="30720" />
            <input type="file" name="plik" />
            <input type="submit" value="Dodaj plik" />
        </div>
    </form>

    <?php
        if(isset($_FILES['plik']))
        {

            switch($_FILES['plik']['error'])
            {
                case 0:
                    if($_FILES['plik']['type'] == "image/jpeg" || $_FILES['plik']['type'] == "image/gif" || $_FILES['plik']['type'] == "image/png")
                    {
                        move_uploaded_file($_FILES['plik']['tmp_name'], "images/".md5(rand()*rand()+rand()).$_FILES['plik']['name']);
                        echo "PLik został pomyślnie zuploadowany.";
                    }else{
                        echo "Niedozwolone rozszerzenie pliku.";
                    }
                    break;
                case 1:
                    echo "Za duży plik {php.ini}.";
                    break;
                case 2:
                    echo "Za duży plik.";
                    break;
                case 3:
                    echo "Niepełny plik.";
                    break;
                case 4:
                    echo "Nie wybrano pliku.";
                    break;
                default:
                    echo "Błąd, którego nie przewidziano prosimy o kontakt.";
            }
        }
    ?>
</body>
</html>