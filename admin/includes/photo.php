<?php


class Photo extends Db_object{

    protected static $db_table = "photos";
    protected static $db_table_fields = array('Photo_id', 'title', 'description', 'filename', 'type', 'size');
    public $Photo_id;
    public $title;
    public $description;
    public $filename;
    public $type;
    public $size;


}



?>