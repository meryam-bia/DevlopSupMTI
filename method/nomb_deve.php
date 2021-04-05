<?php

class nomb_dev
{
    public $rslt;

    public $errorMsg = "";

    public function __construct()
    {
        $host = "localhost";

        $user = "root";

        $password = "";

        $db_name = "gestiondev";

        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $r = $conn->query("SELECT count(*) FROM `developpeurs`");

        // var_dump($r);
        $this->rslt = $r->fetchAll()[0]['count(*)'];
    }
}