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
        $user = "user";
        $pla = "hhh";

        $this->controller->view('home.index', compact('user', 'pla'));
    }

    
}

?>