<?php
try {
    $host = "localhost";

    $user_name = "root";

    $password = "";

    $db_name = "gestiondev";

    $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q_nom = "SELECT`nom` FROM `developpeurs` ORDER by nom";
    $q_prenom = "SELECT `prenom` FROM `developpeurs` ORDER BY prenom";
    $nom_list = $conn->query($q_nom);
    $prenom_list = $conn->query($q_prenom);
    // var_dump($nom_list->fetchAll());
    // var_dump($prenom_list->fetch());
    // echo $nom_list->rowCount();
    // echo $prenom_list->rowCount();
    if($nom_list->rowCount()>0 && $prenom_list->rowCount()>0){
        foreach($nom_list->fetchAll() as $a=>$b){
            echo $b["nom"] ;
        }
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
