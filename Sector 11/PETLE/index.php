<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle w funkcjach MySQL</title>
</head>
<body>
    <?php
    require_once("MultiQueryArray.php");
        $conn = @mysqli_connect("localhost", "root", "", "kursmysql") or die(mysqli_connect_error());

        mysqli_set_charset($conn, "utf8");

        $query = "
            SELECT countWords('null, tralala, lalasd, dsadd', ',');

            SELECT SUBSTRING('To jest cos', 3, 1);
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