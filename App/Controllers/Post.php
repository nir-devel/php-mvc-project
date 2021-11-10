<?php
     class Post{
        
        public function message()
        {
           echo 'hello from  message() ' ; 
        }

        public function add($arg1, $arg2)
        {
            echo 'Hello from save() method <br>'; 
            return $arg1 + $arg2; 
        }
    }


?>