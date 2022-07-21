<?php 


class Database{
private $connection;

    public function open_db_connection(){
        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

        if(mysqli_connect_error()){
            die("Database connection ")
        }
    }
    


}
