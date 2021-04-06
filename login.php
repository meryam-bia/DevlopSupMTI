<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/DevlopSupMTI/style/login.css">

    <title>login</title>
</head>

<body>
    <div class="login">
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="login" name="submit" id="submit">

        </form>
    </div>
    <?php
    if (isset($_POST["submit"])) {
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $emil = test_input($_POST["email"]);
            $password = test_input($_POST["password"]);

            // $pss = password_hash($password, PASSWORD_DEFAULT);

            include "/wamp64/www/DevlopSupMTI/method/f_user.php";

            $f_user = new finde_user($emil, $password);

            // var_dump($f_user->reslt->fetchAll());
            // echo $pss;
        }
    }
    ?>

    <p class="msg"><?php
                    if (isset($f_user)) {
                        echo $f_user->errorMsg;
                    }
                    ?></p>
</body>

</html>