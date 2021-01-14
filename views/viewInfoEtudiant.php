<?php include(ROOT.'/views/header.php')?>
<table>

        <h1> Liste de vos cours</h1>

        <tr>
            <th>Titre</th>
            <th>Code</th>
            <th>Langage</th>

        </tr>
        
        <?php foreach ($resultat2 as $cours2) : ?>
                
                <tr>
                <td><?= $cours2['titre']; ?></td>
                <td><?= $cours2['code']; ?></td>
                <td><?= $cours2['langage']; ?></td>
                <td><?=$cours2['date_inscription'] ?></td>
                </tr>
                </form>

        <?php endforeach; ?>


    </table>




<?php include(ROOT.'/views/footer.php')?>