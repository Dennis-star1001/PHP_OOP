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
        // $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->connection->connect_errno) {
            die("Database connection failed" . $this->connection->connect_errno);
        }
    }


    public function query($sql)
    {
        $result =   $this->connection->query($sql);


        return $result;
    }
    private function confirm_query($result)
    {
        if (!$result) {
            die("Query Failed!" . $this->connection->);
        }
    }
    public function  escape_string($string)
    {
        $escaped_string = mysqli_real_escape_string($this->connection, $string);
        return $escaped_string;
    }
}
$database = new Database();
