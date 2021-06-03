<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <?php
                if (isset($_GET['page']))
                {
                    $allowed_pages = array("java", "php", "mysql");

                    $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);           

                    if (!empty($page))
                    {
                        if (in_array($page, $allowed_pages))                       
                        {
                            if (is_file($page.".php"))
                                include($page.".php");              
                        }
                    }                   
                }
                else                
                    include ("start.php");                  
                
                    
                echo "<title>$title</title>";
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
        if (isset($_GET['page']))
        {
            $allowed_pages = array("java", "php", "mysql");
            
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);           
            
            if (!empty($page))
            {
                if (!in_array($page, $allowed_pages))
                 echo "Taka strona nie istnieje";
                else
                {
                    if (is_file($page.".html"))
                        include($page.".html");
                    else
                        echo "Taka strona nie istnieje";
                }
            }
            
        }
        else  
           include("start.html");

        ?>
               </div>
           </div>

        </div>
    </body>
</html>

