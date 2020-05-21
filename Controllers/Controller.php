<?php

class Controller extends Database
{

    public static function createView($viewName)
    {
        if(strpos($viewName, '.') !== false)
        {
            $path = str_replace('.', '/', $viewName);

            if(file_exists("Views/". $path . ".php"))
                require_once("Views/". $path . ".php");
            else
                die("view not found");
        }
        else
        {
            if(file_exists("Views/". $viewName . ".php"))
                require_once("Views/". $viewName . ".php");
            else
                die("view not found");

        }
    }

}

?>