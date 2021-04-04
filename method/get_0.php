<?php
// select developer
class get_o
{
    public $rst ;
    public function __construct()

    {
        try {
            $host = "localhost";

            $user_name = "root";

            $password = "";

            $db_name = "gestiondev";

            $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);

            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $adduser_str = "SELECT d.nom, d.prenom, d.email  FROM  developpeurs d inner join technologie t on t.dev_id = d.id WHERE t.html = 0 or t.js = 0 or t.php = 0 or t.ajax = 0 or t.cgi = 0 ";

            $r = $conn->query($adduser_str);
            $this->rst = $r;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}