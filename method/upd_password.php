<?php

class upass{

    public $errorMsg ="";

    public function __construct($pss,$id)
    {
        $host = "localhost";
        
        $user = "root";
        
        $password = "";
        
        $db_name = "gestiondev";
        
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $query = "UPDATE `user_table` SET `password_user`='$pss' WHERE `id` = $id " ;

        $r = $conn->prepare($query);
        $r->execute();

        
    }


}