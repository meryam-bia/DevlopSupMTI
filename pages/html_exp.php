<link rel="stylesheet" href="style/html.css">
<div class="htmlDev">
    <table>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>html</th>
        </tr>
        <?php
        include "method/get_html_expo.php";
        $get_html_info = new slsct_dev_nom();
        $rsli = $get_html_info->rst;
        // var_dump($rsli);
        foreach ($rsli as $a) {
            echo "<tr><td>" . $a["nom"] . "</td><td>" . $a["prenom"] . "</td><td>" . $a["email"] . "</td><td>" . $a["html"] . "</td></tr>";
        }
        ?>
    </table>
</div>