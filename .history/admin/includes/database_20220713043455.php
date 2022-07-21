<?php 


class Database{
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

if($connection){
    echo "True";
}
}


?>