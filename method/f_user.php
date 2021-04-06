<?php

class finde_user
{
    public $reslt;
    public $errorMsg = "";

    public function __construct($email, $user_password)
    {
        $host = "localhost";

        $user = "root";

        $password = "";

        $db_name = "gestiondev";

        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $r = $conn->query("SELECT * FROM user_table WHERE email = '$email' AND password_user = '$user_password'");
        $r = $conn->query("SELECT  u.id, u.email , u.password_user FROM user_table u WHERE u.email = '$email'");
        $this->reslt = $r;
        // var_dump($r->fetch());
        // $_SESSION["user_info"] = $r->fetch();
        // var_dump($_SESSION["user_info"]["id"]);
        

        if ($r->rowCount() > 0) {

            if (password_verify($user_password, $r->fetch()['password_user'])) {
                // $_SESSION["user_info"] = $r->fetch();
                // echo "dkhl";
                // var_dump($_SESSION["user_info"]);
                // header('location : profil.php');
                echo "<script>window.location.href='profil.php';</script>";
            } else {
                echo "pass ralat";
            }
        }else{
            echo "email ralat";
        }
    }
}
