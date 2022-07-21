<?php 

class User{



    public static function find_all_users(){
        global $database;
        $result_sett = $database->query("SELECT * FROM users");
        return $result_sett;
    }
}
