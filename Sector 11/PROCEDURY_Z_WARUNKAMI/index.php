<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wielokrotne instrukcje w zapytaniu - multi_query</title>
</head>
<body>
    <?php
    require_once("MultiQueryArray.php");
        $conn = @mysqli_connect("localhost", "root", "", "kursmysql") or die(mysqli_connect_error());

        mysqli_set_charset($conn, "utf8");
        /*
            TRUE - true, wartosci rozne od 0
            FALSE- false, 0, 'tekst'
            NULL - ANI TRUE ANI FALSE
        */
        
        $query = "
            CALL getAmountOfEmails(1);
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