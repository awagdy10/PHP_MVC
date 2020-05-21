<?php

class Route 
{
    public function set($route, $closure)
    {

        $urlRoute = $_SERVER['REQUEST_URI'];
        $urlRoute = explode(' ', $urlRoute);
        
        foreach($urlRoute as $url)
        {
            $url = substr($url, 1);
            break;
        }
        if($url === $route)
        {
            $closure->__invoke();
        }        

    }
}