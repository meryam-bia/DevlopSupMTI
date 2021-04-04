<link rel="stylesheet" href="style/addTechno.css">
<div class="addtechno">

    <form action="" method="post">
        <select name="developer" class="select">
            <?php
            include "method/select_dev_nom.php";
            $selct_dv_nom = new slsct_dev();
            foreach ($selct_dv_nom->rst as $a) {
                // var_dump($a);
                echo "<option value='" . $a["id"] . "'>" . $a["nom"] . "</option>";
            }
            ?>
        </select>
        <!-- <input type="text" name="developer" id="developer" placeholder="developer"> -->
        <input type="text" name="html" id="html" placeholder="html">
        <input type="text" name="php" id="php" placeholder="php">
        <input type="text" name="ajax" id="ajax" placeholder="ajax">
        <input type="text" name="js" id="js" placeholder="js">
        <input type="text" name="cgi" id="cgi" placeholder="cgi">
        <input type="submit" value="add" name="submit" id="submit">
    </form>

</div>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["developer"]) && isset($_POST["html"]) && isset($_POST["php"]) && isset($_POST["ajax"]) && isset($_POST["js"]) && isset($_POST["cgi"])) {
        $dev_id = $_POST["developer"];
        $html = $_POST["html"];
        $php = $_POST["php"];
        $js = $_POST["js"];
        $ajax = $_POST["ajax"];
        $cgi = $_POST["cgi"];

        include "method/add_techno.php";
        $addtechno = new addtech($html, $php, $js, $ajax, $cgi, $dev_id);
        echo '<meta http-equiv="refresh" content="0">';
    }
}
?>
<div class="devTabel">
    <Table>
        <tr>
            <th>developer</th>
            <th>html</th>
            <th>js</th>
            <th>php</th>
            <th>ajax</th>
            <th>cgi</th>
        </tr>

        <?php
        include "method/slsct_techno.php";
        $rslt = new slsct_techno();
        // var_dump($rslt->rst);
        foreach ($rslt->rst as $a) {
            // var_dump($a[""]);
            echo "<tr><td>" . $a["nom"] . "</td>" . "<td>" . $a["html"] . "</td>" . "<td>" . $a["js"] . "</td>" . "<td>" . $a["php"] . "</td>" . "<td>" . $a["ajax"] . "</td>" . "<td>" . $a["cgi"] . "</td>" . "</tr>";
        }

        ?>
    </Table>
</div>