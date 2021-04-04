<?php

class nomb_techno{
    public $rslt;

    public $errorMsg ="";

    public function __construct()
    {
        $host = "localhost";
        
        $user = "root";
        
        $password = "";
        
        $db_name = "gestiondev";
        
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $r= $conn->query("SELECT * FROM `technologie` ");

        // var_dump($r->rowCount());
        $this->rslt = $r->rowCount();
        
       
    }


}

