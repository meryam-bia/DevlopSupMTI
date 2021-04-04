<?php

class nomb_mut
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

        $r = $conn->query("SELECT * FROM `developpeurs` d  inner join `technologie` t on t.dev_id = d.id group by d.id having t.html = 0 or t.js = 0 or t.ajax = 0 or t.php = 0 or t.cgi = 0 ");

        // var_dump($r->rowCount());
        $this->rslt = $r->rowCount();
    }
}
