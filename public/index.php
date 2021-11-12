<?php

/**
 * Front controller
 *
 * PHP version 5.4
 */

/**
 * Routing
 */

// require '../App/Controllers/Posts.php'; 
require '../Core/Router.php';

// require '../App/Controllers/Posts.php'; 


// $postController = new PostController(); 

// echo get_class($postController); 


 


$router = new Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
//$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}'); 
    
// // Display the routing table
// echo '<pre>';
// //var_dump($router->getRoutes());
// echo htmlspecialchars(print_r($router->getRoutes(), true));
// echo '</pre>';


// Match the requested route
$url = $_SERVER['QUERY_STRING'];

// if ($router->match($url)) {
//     echo '<pre>';
//     var_dump($router->getParams());
//     echo '</pre>';
// } else {
//     echo "No route found for URL '$url'";
// }


// /**MY CODE */
// // $class_name = "PostController"; 
// // $method_name = "sae"; 

// // if(class_exists($class_name))
// // {
// //     $postController = new $class_name();

// //     if(is_callable([$postController, $method_name]))
// //     {
// //         $postController->$method_name('abc', '123'); 
// //     }
// //     else   echo 'The method ' . $method_name . 'Can\'t be called'; 


// // }
// // else
// // {
// //     echo 'The class' . $class_name . 'Does not exists'; 
// // }

// // $str = 'new-item add'; 
// // echo '<br>'; 
// // $x = $router->convertToStudlyCaps($str); 
// // echo 'x = ' . $x; 

// // echo '<br>'; 
// // $x = $router->convertToCamelCase($x); 
// // echo 'x = ' . $x; 

// // $router->dispatch('posts/index'); 

// echo "<br> index.php , url : $url <br>"; 
$router->dispatch($url); 








?>