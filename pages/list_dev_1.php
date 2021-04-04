<div class="list_dev_0">
    <table>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
        </tr>
        <?php
        include "method/get_1.php";
        $get0 = new get_1();
        // var_dump($get0->rst)
        $i = 0; ?>

        <?php foreach ($get0->rst as  $a) { ?>
            <tr>
                <td> <?php echo $a["nom"]; ?></td>
                <td><?php echo $a["prenom"]; ?></td>
                <td><?php echo $a["email"]; ?></td>
            </tr>

        <?php } ?>




    </table>

</div>