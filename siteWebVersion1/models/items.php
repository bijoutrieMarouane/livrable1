<?php
class users{
    static public function getAllItems()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM items');
        $stmt -> execute();
        $items = $stmt->fetchAll();
        return $items;
    }
    static public function getAllAdmins()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users WHERE group_id = 1');
        $stmt -> execute();
        $admins = $stmt->fetchAll();
        return $admins;
    }
}