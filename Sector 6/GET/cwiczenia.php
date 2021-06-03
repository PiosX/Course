<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="menu">
        <div><a href="?page=java">Java</a></div>
        <div><a href="?page=php">PHP</a></div>
        <div><a href="?page=mysql">MySql</a></div>
    </div>
    <?php
        if(isset($_GET['page']))
        {
            $allowed_pages = array("java", "php", "mysql");
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
            if(!empty($page))
            {
                if(!in_array($page, $allowed_pages))
                {
                    echo "Taka strona nie istnieje";
                }else{
                    if(is_file($page.".html"))
                        include($page.".html");
                    else    
                        echo "Nie ma takiej strony";
                }
                
            }
        }else
            include("start.html");
    ?>
</body>
</html>