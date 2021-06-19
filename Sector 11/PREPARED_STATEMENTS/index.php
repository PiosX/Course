<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared statements</title>
</head>
<body>
    <?php
    require_once("MultiQueryArray.php");
        $conn = @mysqli_connect("localhost", "root", "", "kursmysql") or die(mysqli_connect_error());

        mysqli_set_charset($conn, "utf8");

        
        //placeholder
        $query = "
            SELECT id, email, login FROM klienci
        ";

        if($stmt = mysqli_prepare($conn, $query))
        {

        //$name - s, $energy - i $max_energy - i    d-double, b- binary
        //mysqli_stmt_bind_param($stmt, "i", $id);

            //$id = 1;

            //$name = 'ktoasffk';
            //$energy = 32;
            //$max_energy = 20;
            mysqli_stmt_bind_result($stmt, $id, $email, $login);

            mysqli_stmt_execute($stmt);

            while(mysqli_stmt_fetch($stmt));
                echo "$id, $email, $login";

        mysqli_stmt_close($stmt);
        }
        /*
        try
        {
            $mq = new MultiQueryArray($conn);

            $result = $mq->multi_query($query, MultiQueryArray::AS_DUMP);
            
        }catch(Exception $e)
        {
            echo $e->getMessage();
        }      
        */
        mysqli_close($conn);
    ?>
</body>
</html>