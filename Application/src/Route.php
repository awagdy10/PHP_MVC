<?php


class Route 
{
    public static function get($route, $closure)
    {

        $urlRoute = $_SERVER['REQUEST_URI'];
        $urlRoute = explode(' ', $urlRoute);

        $url = $urlRoute[0];

        if($url === '/')
        {
            $url = "/index";
        }
        $url = substr($url, 1); // removes first char ("/")

        
        if($url === $route) // to get the desired route
        {
            if(strpos($closure, '@') !== false) // is not a function
            {
                $closure        = explode('@', $closure);
                $controllerName = $closure[0];
                $method         = $closure[1];

                $controller = new $controllerName();

                $controller->$method();

            }
            
            else
            {
                $closure->__invoke();
            }
            
        }  
        
        
    }
}


?>