<?php 

class users{
    static public function getAllUsers()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users');
        $stmt -> execute();
        $users = $stmt->fetchAll();
        return $users;
    }   
    static public function getAllMembers()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users WHERE group_id = 0');
        $stmt -> execute();
        $members = $stmt->fetchAll();
        return $members;
    }
    static public function getAllAdmins()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users WHERE group_id = 1');
        $stmt -> execute();
        $admins = $stmt->fetchAll();
        return $admins;
    }
}