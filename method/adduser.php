<?php

class addnewuser
{
    public function __construct($nom, $prenom, $email,$password_user)
    {
       
        $host = "localhost";
       
        $user_name = "root";
       
        $password = "";
       
        $db_name = "gestiondev";
       
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);
       
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $adduser_str = "INSERT INTO `user_table`(`id`, `nom`, `prenom`, `email`, `password_user`) VALUES (null,'$nom','$prenom','$email','$password_user')";
       
        $conn->exec($adduser_str);
    }
}