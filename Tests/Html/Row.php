<?php

    namespace Html; 

    class Row
    {
        private $rowNumber; 

        private $rowSize; 

       
        function __construct($rowNumber, $rowSize)
        {
            $this->rowNumber = $rowNumber; 

            $this->rowSize = $rowSize; 
        }

        public function getRowSize()
        {
            return $this->rowsize; 
        }

        public function getRowNumber()
        {
            return $this->rowNumber; 
        }
    }
?>