<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/DevlopSupMTI/style/inscription.css">

    <title>inscription</title>
</head>

<body>
    <div class="inscription">
        <form action="inscription.php" method="post">
            <input type="text" name="nom" placeholder="nom">
            <input type="text" name="prenom" placeholder="prenom">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="mot de pass">
            <input type="submit" value="inscription" name="submit" id="submit">
            <a href="login.php">vous avez deja un compte</a>

        </form>

    </div>

    <?php
    if (isset($_POST["submit"])) {
        if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["password"])) {
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $nom = test_input($_POST["nom"]);
            $prenom = test_input($_POST["prenom"]);
            $emai = test_input($_POST["email"]);
            $pssword = test_input($_POST["password"]);

            $pss = password_hash($pssword, PASSWORD_DEFAULT);
            
            include "/wamp64/www/DevlopSupMTI/method/adduser.php";
            $addnewuser = new addnewuser($nom, $prenom, $emai, $pss);
            echo '<meta http-equiv="refresh" content="0">';
        }
    }
    ?>
</body>

</html>