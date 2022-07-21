<?php 

class User{



    public function find_all_users(){
        global $database;
        $result_sett = $database->query("SELECT * FROM users");
        return $result_sett;
    }
}
