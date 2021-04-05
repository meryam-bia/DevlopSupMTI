<?php
// select developer
class slsct_dev
{
    public $rst;
    public function __construct()

    {
        try {
            $host = "localhost";

            $user_name = "root";

            $password = "";

            $db_name = "gestiondev";

            $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $adduser_str = "SELECT * FROM  developpeurs  ";

            $r = $conn->query($adduser_str);
            $this->rst = $r->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
