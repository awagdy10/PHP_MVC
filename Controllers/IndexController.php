<?php

class IndexController extends Controller 
{

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $database = new Database();
        $data = $database->get_rows($sql);
        var_dump($data);

    }

    
}

?>