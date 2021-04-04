<?php

class finde_user{

    public $errorMsg ="";

    public function __construct($email,$user_password)
    {
        $host = "localhost";
        
        $user = "root";
        
        $password = "";
        
        $db_name = "gestiondev";
        
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $r= $conn->query("SELECT * FROM user_table WHERE email = '$email' AND password_user = '$user_password'");
        
        if($r->rowCount()>0){
        
            $_SESSION["user_info"]=$r->fetch();
        
            header('Location: profil.php');
            
            // $this->errorMsg="lognid";

        }else{
        
            $this->errorMsg="user name or password";
        
        }
    }


}