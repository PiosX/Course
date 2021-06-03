<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <?php
                sprawdz(".php",1);
        ?>
        
        
        <link rel="stylesheet" href="style.css" type="text/css" />

    </head>
    <body>
        <div id="container">
            <div id="top">
                BANER
            </div>
            
            <div id="menu">
                <div><a href="?page=java">Java</a></div>
                <div><a href="?page=php">PHP</a></div>
                <div><a href="?page=mysql">MySql</a></div>
            </div>
            <div id="content">     
                <div id="text">
        <?php
        function sprawdz($check, $value)
        {
            $check = array(".html", ".php");

            if($check!=(".html" || ".php")){
                echo "Niepoprawny wybór";
            }else{
                if (isset($_GET['page']))
                {
                    $allowed_pages = array("java", "php", "mysql");
            
                    $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);           
            
                if (!empty($page))
                {
                    if (!in_array($page, $allowed_pages)){
                        if($value == 0)
                            echo "Taka strona nie istnieje";
                        else
                            echo "";
                    }         
                    else
                    {
                        if (is_file($page.$check[$value]))
                            include($page.$check[$value]);
                        else
                        {
                            if($value == 0)
                                echo "Taka strona nie istnieje";
                            else
                                echo "";
                        }     
                    }
                }
            
                }else{
                        include("start.html");
                }
                if($value == 1)
                {
                    echo "<title>$title</title>";
                }
            }
        }
        sprawdz(".html",0);
        ?>
               </div>
           </div>

        </div>
    </body>
</html>

