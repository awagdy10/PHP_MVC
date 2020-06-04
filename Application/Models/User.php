<?php

class User extends BaseModel
{
    public $model;

    public function __construct()
    {
        $this->database = new BaseModel();
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        return $this->database->get_rows($sql);
    }

}


?>