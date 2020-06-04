<?php


class Route 
{
    public static function get($route, $closure)
    {

        $urlRoute = $_SERVER['REQUEST_URI'];
        $urlRoute = explode(' ', $urlRoute);
        
        foreach($urlRoute as $url)
        {
            if($url === '/')
            {
                $url = "/index";
            }
            
            $url = substr($url, 1);
            break;
        }
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