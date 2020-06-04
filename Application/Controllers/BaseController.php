<?php

class BaseController
{

    public function view($viewName, $data = NULL)
    {

        if(strpos($viewName, '.') !== false)
        {
            $this->replaceDotWithSlash($viewName, $data);
        }
        else
        {
            $this->returnView($viewName, $data);
        }        

    }

    public function replaceDotWithSlash($viewName, $data)
    {
        if(isset($data))
            extract($data);

        $path = str_replace('.', '/', $viewName);

        if(file_exists(realpath(dirname(__FILE__) . '/../views/'.$path. '.php')))
            require_once(realpath(dirname(__FILE__) . '/../views/'.$path. '.php'));
        else
            die("view not found");
    }

    public function returnView($viewName, $data)
    {
        if(isset($data))
            extract($data);

        if(file_exists(realpath(dirname(__FILE__) . '/../views/'.$viewName. '.php')))
            require_once(realpath(dirname(__FILE__) . '/../views/'.$viewName. '.php'));
        else
            die("view not found");
    }

}


?>