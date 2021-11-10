<?php 

   
    // $url = $_SERVER['QUERY_STRING']; 

    // echo $url ;

    // $reg = '/(?<controller>[a-z-]+)\/(?<action>[a-z-]+)/'; 

    // echo '<br>';

    // if(preg_match($reg, $url, $matches))
    //     {
    //         echo 'There is a match!'; 
    //         echo '<pre>';
    //         var_dump($matches);
    //         echo '</pre>'; 
    //     }

    /***************************
     * REPLACEMENT TEXT USING REGULAR EXPRESSION
     **************************************/
    // $str = 'bacad'; 
    //  $res = preg_replace('/a/', 'XXXX', $str ); 

    //  echo preg_replace('/\s+/', ',', 'd  d a');

    //  echo '<br>'; 
    //  echo preg_replace('/ab(c)/', '\1de', 'abc');

    //  echo '<br>';
    //  echo preg_replace('/(\w+) and (\w+)/', '\1 or \2', 'Jack and Jill'); 


     /**********************************************************************
      * Getting the Controller and Action from a URL with a VARIABLE structure:org.nir/{controller}/{action}: 
        *************************************************************************
       Step 1: Add routes to the Table with the form of : {controlle}/{action} instead
                 of the previus: controller/action : 

                     $router->add('{controller}/{action}')

       Step 2: To match the route to the request URL , 
                it needs to be converted to regular expressoin:

                Turning the route into a regular expression: 

               Given Route:  $route = {controller}/{actoin}

               1.Replace the original '\' in the route by '\/': 
                 '/\//' => '\\/' (Escaping the forword slash (speciel charaeters in regs))

               2. Convert the variables: the strings in the {} ({} are speciel chareters in regs..)

                



        
      *************************************************/

     
    //Convert the variables(strings of chars between {}): 
    // '/\{([a-z-]+)\}/' => '(?P<\1>[a-z-]+)'
    //{posts} => posts
    //This reg teplacement [a-z-]+ is a named caputre group and it replaces strings:{afsf} 
    
    // $s = "{controller}/{action}"; 
    // echo 'Original String:<br>' ;
    // echo $s; 


    // $s = preg_replace('/\\//', '\/', $s); 
    // echo  "<br><br>After escaping the backslash:<br>";
    // echo $s; 

    // echo '<br>'; 
    
    // $s =  preg_replace('/\{([a-z-]+)\}/', '(?P<\1>[a-z-]+)', $s); 
    // echo  "<br><br>After Removing the curlly braces:<br>";
    // echo $s; 

    // //Adding the ^ and the $
    // $s = '^' . $s . '$';  
    // echo  "<br><br>After adding the ^ and $:<br>";
    // echo $s; 
    



    // //echo preg_replace('//', '', $s); 



    // $res =  preg_replace('/\{([a-z-]+)\}/','(?P<\1>[a-z-]+)', $s ); 
    // echo '<br>' ; 
    // echo $res;



    //Given an optinal regular expression of the form    id:\d+
   
    $router = '{controller}/{123}/{action}'; 
    $router = '{controller}/{id:\d+}/{action}'; 
    $router = preg_replace('/\{([a-z-]+]) : ([^\}]+)\}/','(?P<\1>\2)',$router );

    echo $router; 







    





?>