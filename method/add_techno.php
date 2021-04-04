<?php
// add info
class addtech
{
    public function __construct($html, $php, $js, $ajax, $cgi, $dev_id)
    {
        try {
            $host = "localhost";

            $user_name = "root";

            $password = "";

            $db_name = "gestiondev";

            $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $adduser_str = "INSERT INTO `technologie`(`id`, `html`, `dev_id`, `php`, `js`, `cgi`, `ajax`) VALUES (null,$html,$dev_id,$php,$js,$cgi,$ajax)";

            $conn->exec($adduser_str);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
