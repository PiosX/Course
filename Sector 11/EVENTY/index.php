<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventy - zdarzenia planowane i powtarzające się</title>
</head>
<body>
    <?php
    require_once("MultiQueryArray.php");
        $conn = @mysqli_connect("localhost", "root", "", "kursmysql") or die(mysqli_connect_error());

        mysqli_set_charset($conn, "utf8");
        /*
           * SELECT @@event_scheduler; - sprawdzenie czy event scheduler jest włączony
           * 
           * SET GLOBAL event_scheduler = 1; - włączenie event schedulera 
           * 
           * CREATE EVENT event_name
           * ON SCHEDULE
           *  AT timestamp
           * DO
           *  sql_statement;
           * 
           * CREATE EVENT event_name
           * ON SCHEDULE
           *  EVERY amount
           *    {SECOND|MINUTE|HOUR|DAY|MONTH|YEAR|WEEK}
           * DO
           *  sql_statement;* 
           * 
           * CREATE EVENT event_name
           * ON SCHEDULE {EVERY|AT}...
           * 
           * [ON COMPLETION [NOT] PRESERVE]
           * [STARTS {timestamp}]
           * [ENDS {timestamp}]
           * 
           * DO
           *    sql_statement;
           *
           */
        
        $query = "
            
        ";
        

        try
        {
            $mq = new MultiQueryArray($conn);

            $result = $mq->multi_query($query, MultiQueryArray::AS_DUMP);
            
        }catch(Exception $e)
        {
            echo $e->getMessage();
        }      

        mysqli_close($conn);
    ?>
</body>
</html>