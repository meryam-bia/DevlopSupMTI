<?php
// Start the session
// session_start();
$id  = $_SESSION["user_info"]["id"];

// var_dump($_SESSION);
// $nom = 
?>
<link rel="stylesheet" href="style/change_info.css">
<div class="change_info">
    <form action="" method="post">
        <input type="text" name="nom" placeholder="new name">
        <input type="text" name="prenom" placeholder="new prenom">
        <input type="email" name="email" placeholder="new email">
        <input type="submit" value="change" name="submit" id="submit">
    </form>
</div>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        include "method/upd_user.php";
        $upuser = new upuser($nom, $prenom, $email, $id);
        echo '<meta http-equiv="refresh" content="0">';
    }
}
?>