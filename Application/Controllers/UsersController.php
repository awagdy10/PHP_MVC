<?php

class UsersController extends BaseController 
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

        return $this->controller->view('users.index', compact('users'));
    }

    
}

?>