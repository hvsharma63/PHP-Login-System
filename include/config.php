<?php 

    if(!defined('__CONFIG__')){
        exit('No Config File Found');
    }

    //Include the DB.php file
    include_once 'classes/DB.php';

    $conn = DB::getConnection();

?>