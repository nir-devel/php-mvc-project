
<?php

/**
 * Front controller
 *
 * PHP version 5.4
 */

/**
 * Routing
 */
require '../Core/Router.php';
require '../App/Controllers/Post.php'; 
$router = new Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
    
// Display the routing table
echo '<pre>';
//var_dump($router->getRoutes());
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';


// Match the requested route
$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found for URL '$url'";
}

//Test the Post Controller - Dynamcially 

$class_name = 'Post'; 
$method_name = 'add' ;





if(class_exists($class_name) )
{
    $post = new Post()  ;

    if(is_callable([$post, $add]))
      {
        $sum =  call_user_func_array([$post, $method_name], [4, 5]); 
        echo 'Sum = ' . $sum; 
    } 
          


    

}



?>