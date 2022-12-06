<?php

class usersController{

    public function getAllUsers()
    {
        $users = users::getAllUsers();
        return $users;
    }

}

?>