<?php

class BaseController
{

    public function view($viewName)
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

        if(file_exists(realpath(dirname(__FILE__) . '/../views/'.$path. '.php')))
            require_once(realpath(dirname(__FILE__) . '/../views/'.$path. '.php'));
        else
            die("view not found");
    }

    public function returnView($viewName)
    {
        if(file_exists(realpath(dirname(__FILE__) . '/../views/'.$viewName. '.php')))
            require_once(realpath(dirname(__FILE__) . '/../views/'.$viewName. '.php'));
        else
            die("view not found");
    }

}


?>