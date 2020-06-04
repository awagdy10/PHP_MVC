<?php

class IndexController extends BaseController 
{

    public $controller;

    public function __construct()
    {
        $this->controller = new BaseController();
    }

    public function index()
    {
        $this->controller->view('about');
    }

    
}

?>