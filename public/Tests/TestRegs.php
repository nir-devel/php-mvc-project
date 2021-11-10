<?php


/*****************************************
 *Using capture groups(subpattern) for adding more items to the matches array of 
 the preg_match() function : 

 WITHOUT CAPTURE GOURPE:
    preg_match('/a[123]+b/', 'a222b', $matches) => $matches = [0 => "a222b"]

                    array(1) {
                        [0]=>
                        string(5) "a222b"
                    }

WITH CAPTURE GROUP: 

    preg_match('/a([123]+)b/', 'a222b', $matches)
                    
                    array(2) {
                        [0]=>
                        string(5) "a222b"
                        [1]=>
                        string(3) "222"
                        }
 *********************************************************/

//  preg_match('/a[123]+b/', 'a222b', $matches); 
//  echo '<pre>'; 
//  var_dump($matches); 
//  echo '</pre>'; 

//  preg_match('/a([123]+)b/', 'a222b', $matches); 

//  echo '<pre>'; 
//  var_dump($matches); 
//  echo '</pre>'; 


$str = 'September 1988'; 

$reg = '/(?P<month>[a-zA-Z]+) (?P<year>\d+)/'; 

preg_match($reg, $str, $matches);

 echo '<pre>'; 
 var_dump($matches); 
 echo '</pre>'; 





?>