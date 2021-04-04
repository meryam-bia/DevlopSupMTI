<?php
class addnewdev
{
    public function __construct($nom, $prenom, $email)
    {
        try {
            $host = "localhost";

            $user_name = "root";

            $password = "";

            $db_name = "gestiondev";

            $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $adduser_str = "INSERT INTO `developpeurs`(`id`, `nom`, `prenom`, `email`) VALUES (null,'$nom','$prenom','$email')";

            $conn->exec($adduser_str);
            echo '<meta http-equiv="refresh" content="0">';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}