<?php

require '../App/Controllers/Posts.php'; 
/**
 * Router
 *
 * PHP version 5.4
 */
class Router
{

    
    /**
     * Associative array of routes (the routing table)
     * @var array
     */
    protected $routes = [];

    /**
     * Parameters from the matched route
     * @var array
     */
    protected $params = [];

    /**
     * Add a route to the routing table
     *
     * @param string $route  The route URL
     * @param array  $params Parameters (controller, action, etc.)
     *
     * @return void
     */
    public function add($route, $params = [])
    {
        // Convert the route to a regular expression: escape forward slashes
        $route = preg_replace('/\//', '\\/', $route);

        // Convert variables e.g. {controller}
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);

        // Convert variables with custom regular expressions e.g. {id:\d+}
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);

        // Add start and end delimiters, and case insensitive flag
        $route = '/^' . $route . '$/i';

        $this->routes[$route] = $params;
    }

    /**
     * Dispatch the 
     * @param string $url : The route URL
     * 
     * @return void
     */

    public function dispatch($url)
    {
        //NOTE: IF THERE IS A MATCH - THE PARAMS array property will be set to [controller, action]
        //of the given URL
        if($this->match($url))
        {
           //Fetch the controller name from the $params property and convert to studlyCaps
           $controller = $this->params['controller']; 
        //    echo 'dispatch(): $controller Before studlyCase: '. $controller . '<br>'; 
        //    echo $controller; 
           $controller = $this->convertToStudlyCaps($controller); 
        //    echo 'dispatch(): $controller After studlyCase: '. $controller . '<br>'; 
          

          if(class_exists($controller))
          {
            $controllerObject = new $controller(); 

            //Fetch the action method and voncert to CamelCase
            $action = $this->params['action']; 
            // echo "<br>"; 
            // echo "dispatch(): The method name BEFORE convert to camel case: $action";
            $action = $this->convertToCamelCase($action); 
            // echo "<br>"; 
            // echo "dispatch(): The method name AFTER convert to camel case: $action <br>";

            if(is_callable([$controllerObject, $action]))
            {

                $controllerObject->$action(); 
            }
            else
            {
                echo "Method $action (in controller $controller) not found!"; 
            }

          }
          else
          {
              echo "Controller class $controller not found";
          }

        }
        else
        {
            echo "No match found for the url $url "; 
        }
    }

    /**
     * Get all the routes from the routing table
     *
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Match the route to the routes in the routing table, setting the $params
     * property if a route is found.
     *
     * @param string $url The route URL
     *
     * @return boolean  true if a match found, false otherwise
     */
    public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }

                $this->params = $params;
                return true;
            }
        }

        return false;
    }

    /**
     * Get the currently matched parameters
     *
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param string $str
     * 
     * @return string : studlyCaps
     */
    public function convertToStudlyCaps($str)
    {
        return str_replace(' ','',  ucwords(str_replace('-', ' ', $str)));
    }

    public function convertToCamelCase($str)
    {
        return lcfirst($this->convertToStudlyCaps($str));
    }
}