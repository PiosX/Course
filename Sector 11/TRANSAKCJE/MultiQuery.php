<?php
require_once("MultiQueryI.php");
    class MultiQuery implements MultiQueryI
    {
        protected $conn;
        protected $actualProcessingFunction;
        const AS_DUMP = "processQueryAsDump";
        function __construct($conn)
        {
            $this->conn = $conn;
        }
        function multi_query($query, $processing_function)
        {
            mysqli_query($this->conn,"START TRANSACTION");
            if(mysqli_multi_query($this->conn, $query))
            {
                $this->actualProcessingFunction = $processing_function;
                do
                {
                    $result = mysqli_store_result($this->conn);
                    if($result)
                    {
                        $this->$processing_function($result);

                        mysqli_free_result($result);
                    }
                }
                while(mysqli_more_results($this->conn) && $is_next_result_ok = mysqli_next_result($this->conn));
            
                if(!$is_next_result_ok)
                {                
                    throw new Exception(mysqli_error($this->conn).mysqli_rollback($this->conn));
                }

                mysqli_commit($this->conn);
            }
            else
                throw new Exception(mysqli_error($this->conn));

            return $this->returnValue();
        }

        public function processQueryAsDump($result)
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

        public function returnValue()
        {
            return true;
        }
    }
?>