<link rel="stylesheet" href="style/addDiv.css">
<div class="enregistrer">
    <form action="" method="post">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="submit" value="enregistrer" name="submit" id="submit">
    </form>
</div>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["nom"])) {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        // end check
        $nom = test_input($_POST["nom"]);
        $prenom = test_input($_POST["prenom"]);
        $email = test_input($_POST["email"]);
        // check input value
        // connect db
        // add devloper to db 

        // var_dump();
        include "/wamp64/www/DevlopSupMTI/method/addDevloper.php";

        include "method/select_dev.php";
        $get_email = new slsct_dev_email();
        $email_d =  $get_email->rst;
        $val = true;
        foreach ($email_d as $a) {
            var_dump($a["email"]);

            if ($a["email"] == $email) {
                $val = false;
            }
        }
        if ($val) {
            $addDev = new addnewdev($nom, $prenom, $email);
            echo '<meta http-equiv="refresh" content="0">';
        }
    }
}

?>

<?php
// include "method/select_dev.php";
// $get_email = new slsct_dev_email();
// $email_d =  $get_email->rst;
// foreach ($email_d as $a) {
//     var_dump($a["email"]);
// }
?>