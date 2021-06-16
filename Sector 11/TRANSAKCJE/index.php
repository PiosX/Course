<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transakcje</title>
</head>
<body>
    <?php
    require_once("MultiQueryArray.php");
        $conn = @mysqli_connect("localhost", "root", "", "kursmysql") or die(mysqli_connect_error());

        mysqli_set_charset($conn, "utf8");

        mysqli_query($conn, "START TRANSACTION");
        $result= mysqli_query($conn, "INSERT INTO test (tekst) VALUES ('tralala')");
       //mysqli_insert_id($conn);
        /*
            przetwarzanie danych z $result
        */
        $ok = mysqli_query($conn, "DELETE * FROM test");

        if(!$ok)
            mysqli_rollback($conn);
        else
            mysqli_commit($conn);
     
       /* 
        $query = "
        SET @blabla = 4;CALL getTotalOrderAmount(1, @total); UPDATE klienci SET login = 'a' WHERE id = 1; UPDATE klienci SET login = 'n' WHERE id = 2; SELECT * FROM zamowienia;  SELECT @total TotalOrderAmount; SELECT @blabla;
        ";
        
        //$query = "UPDATE klienci SET login = 'najeszczeinny' WHERE id = 1; SELECT 5,10,15; SELECT 40; SELECT 100;";

        function processQueryAsDump($result)
        {
            if(mysqli_num_rows($result)>0)
            {
                echo mysqli_num_rows($result);

                while($row = mysqli_fetch_assoc($result))
                {
                    var_dump($row);
                }
            }
        }

        try
        {
            $mq = new MultiQueryArray($conn);

            $result = $mq->multi_query($query, MultiQueryArray::AS_DUMP);
            //$result = $mq->multi_query("SELECT * FROM zamowienia", "processQueryAsDump");
            for($i=0;$i<$mq->getNumberOfQueries();$i++)
            {
                $result = $mq->getQueryResultSet($i);
                var_dump($result);
            }
            
            mysqli_close($conn);
        }catch(Exception $e)
        {
            echo $e->getMessage();
        } 
        */     
    ?>
</body>
</html>