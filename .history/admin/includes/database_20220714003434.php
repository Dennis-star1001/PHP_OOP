<?php

require_once("new_config.php");
class Database
{

    public $connection;

    function __construct()
    {
        $this->open_db_connection();
    }



    public function open_db_connection()
    {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_errno()) {
            die("Database connection failed" . mysqli_connect_error());
        }
    }


    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
       

        return $result;
    }
    private function confirm_query(){
        if(!$result){
            die("Query Failed!");
        }
    }
}
$database = new Database();
