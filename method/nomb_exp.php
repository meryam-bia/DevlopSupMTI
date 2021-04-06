<?php

class nomb_exp
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

        $r = $conn->query("SELECT d.id FROM `developpeurs` d  inner join `technologie` t on t.dev_id = d.id where t.html = 5 ");

        // var_dump($r->rowCount());
        $this->rslt = $r->rowCount();
    }
}
// $a = new nomb_exp();
// var_dump($a->rslt->rowCount());