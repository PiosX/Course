<?php
    interface MultiQueryI
    {
        /**
         * to jest funkcja, która musi zostać zaimplementowana przez wszystkie klasy, które będą rozszerzasz klasę MultiQuery i ta funkcja ma powiedzieć CO ZOSTANIE ZWRÓCONE przez funkcje multi_query, przy zastosowaniu jej funkcji przetwarzajacych
         * 
         * EXAMPLE:
         *  if($this->actualProcessingFunction ==           "processQueryArray")
            return $this->allQueries;
            else
                return parent::returnValue();
         */
        function returnValue();
    }
?>