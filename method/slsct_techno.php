<?php
// select info  thechno
class slsct_techno
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

            $adduser_str = "SELECT d.nom, t.id, t.html, t.php, t.js, t.cgi, t.ajax FROM technologie t INNER JOIN developpeurs d on t.dev_id = d.id GROUP BY d.nom  ";
            $r = $conn->query($adduser_str);
            $this->rst = $r->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}