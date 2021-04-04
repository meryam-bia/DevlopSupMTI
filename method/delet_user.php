<?php

class deletdev{



   public function __construct($id)
   {
    try {
        $host = "localhost";
    
        $user_name = "root";
    
        $password = "";
    
        $db_name = "gestiondev";
    
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $dlt = "DELETE FROM `developpeurs` WHERE `id` = $id ";
        $conn->exec($dlt);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
   }

}

