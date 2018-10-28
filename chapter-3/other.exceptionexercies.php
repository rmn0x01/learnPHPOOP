<?php

    error_reporting(E_ALL - E_WARNING);
    class db{
        function connect(){
            if(!mysqli_connect("host=localhost password=pass user=username dbname=db")) throw new Exception("cannot connect to database");
        }
    }
    $db = new db();
    try{
        $db->connect();
    } catch (Exception $e){
        print_r($e);
    }
?>