<?php
class DbConnect{
    function __construct(){

    }

    public function load(){
        try{
            $conn = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e){
            echo "Error : ".$e->getMessage();
        }

    }
}