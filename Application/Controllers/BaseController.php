<?php

class BaseController
{

    public function createView($viewName)
    {
        if(strpos($viewName, '.') !== false)
        {
            $this->replaceDotWithSlash($viewName);
        }
        else
        {
            $this->returnView($viewName);
        }
    }

    public function replaceDotWithSlash($viewName)
    {
        $path = str_replace('.', '/', $viewName);

        if(file_exists("Views/". $path . ".php"))
            require_once("Views/". $path . ".php");
        else
            die("view not found");
    }

    public function returnView($viewName)
    {
        if(file_exists("Views/". $viewName . ".php"))
            require_once("Views/". $viewName . ".php");
        else
            die("view not found");
    }

}


?>