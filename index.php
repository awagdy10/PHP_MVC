<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once('routes/web.php');

function __autoload($class_name) 
{
    if(file_exists('Application/src/'.$class_name.'.php'))
    {
        require_once ('Application/src/'.$class_name.'.php');
    }

    if(file_exists('Application/Controllers/'.$class_name.'.php'))
    {
        require_once ('Application/Controllers/'.$class_name.'.php');
    }

    if(file_exists('Application/Models/'.$class_name.'.php'))
    {
        require_once ('Application/Models/'.$class_name.'.php');
    }

}



?>