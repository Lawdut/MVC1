<?php include(ROOT.'/views/header.php')?>


<table>

        <h1> Liste des cours</h1>

        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Code</th>
            <th>Langage</th>

        </tr>
        
        <?php foreach ($ligne as $cours) : ?>
            
                
                <tr>
                <td><?= $cours['id']; ?></td>
                <td><?= $cours['titre']; ?></td>
                <td><?= $cours['code']; ?></td>
                <td><?= $cours['langage']; ?></td>
                <td><a href  = "controllerInscription/inscriptionCours/<?=$cours['id']?>/<?=$_SESSION['id']?>"><button>Inscription</button></a></td>
                </tr>
                
        <?php endforeach; ?>


    </table>


    



<?php include(ROOT.'/views/footer.php')?>