<?php
class Model{
    //protected $tablename;
    protected $database;
    function __construct(){
        //$this->tablename = $table_name;
        $this->database = new DbConnect();
    }

    function create($object){

    }
}