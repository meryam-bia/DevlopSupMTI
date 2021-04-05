<?php
try {
    $host = "localhost";

    $user_name = "root";

    $password = "";

    $db_name = "gestiondev";

    $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q_all_list = "SELECT `prenom`,`nom`,`id` FROM `developpeurs` ORDER BY nom";
    $all_list = $conn->query($q_all_list);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<link rel="stylesheet" href="style/show_dev.css">
<div class="show_dev">
    <form action="" method="post">
        <table>
            <tr id="table_header">
                <th>nom</th>
                <th>prenom</th>
                <th>remove developer</th>
            </tr>
            <!-- <tr id="table_body"> -->
            <?php
            if ($all_list->rowCount() > 0) {
                foreach ($all_list->fetchAll() as $a) {
                    echo "<tr>" . "<td>" . $a["nom"] . "</td>" . "<td>" . $a["prenom"] . "</td>" . "<td> <button  value = '" . $a['id'] . "' name='submit' class='submit'>DELET</button>  </td>" . "</tr>";
                }
            }
            ?>
            <!-- </tr> -->


        </table>
    </form>
</div>
<?php
if (isset($_POST["submit"])) {
    $id_s = $_POST["submit"];
    include "method/delet_user.php";
    $delet = new deletdev($id_s);
    echo '<meta http-equiv="refresh" content="0">';
}
?>