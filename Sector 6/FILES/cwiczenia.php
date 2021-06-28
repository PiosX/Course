<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cwiczenia.php" method="POST" enctype="multipart/form-data">
        <div>      
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
                    if($_FILES['plik']['type'] == "image/jpeg" || $_FILES['plik']['type'] == "image/png")
                    {
                        move_uploaded_file($_FILES['plik']['tmp_name'], "images/".md5(rand()*rand()+rand()).$_FILES['plik']['name']);
                        echo "Plik pomyślnie wysłany!";
                    }else{
                        echo "Niedozwolone rozszerzenie pliku.";
                    }
                    break;
                case 1:
                    echo "Error 1";
                    break;
                case 2:
                    echo "Error 2";
                    break;
                case 3:
                    echo "Error 3";
                    break;
                case 4:
                    echo "Error 4";
                    break;
                default:
                    echo "Error#";
                    break;
            }

        }
    ?>
</body>
</html>