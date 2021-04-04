<?php
// Start the session
// session_start();
$id  = $_SESSION["user_info"]["id"];
// var_dump($_SESSION);
// $nom = 
?>
<link rel="stylesheet" href="style/change_password.css">
<div class="change_password">
    <form action="" method="post">
        <input type="text" name="password" id="password" placeholder="new passwords">
        <input type="submit" value="change" name="submit" id="submit">
    </form>
</div>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["password"])) {
        $password = $_POST["password"];
        include "method/upd_password.php";
        $up_password = new upass($password, $id);
    }
    echo '<meta http-equiv="refresh" content="0">';
}
?>