<?php

class IndexController extends BaseController 
{

    public $controller;
    public $userModel;

    public function __construct()
    {
        $this->controller = new BaseController();
        $this->userModel  = new User();
    }

    public function index()
    {

        $users = $this->userModel->getUsers();
        var_dump($users);
        die;
        $user = "user";
        $pla = "hhh";

        $this->controller->view('home.index', compact('user', 'pla'));
    }

    
}

?>