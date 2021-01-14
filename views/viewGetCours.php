<?php include(ROOT.'/views/header.php')?>

    <table>

        <h1> Liste des cours</h1>

        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Code</th>
            <th>Langage</th>

        </tr>
        
        <?php foreach ($result as $gligne) : ?>
            
                
                <tr>
                <form action ="controllerCours/getAllCours" method="POST">
                <td><?= $gligne['id']; ?></td>
                <td><?= $gligne['titre']; ?></td>
                <td><?= $gligne['code']; ?></td>
                <td><?= $gligne['langage']; ?></td>
                <td><a href = "controllerCours/modifOneCours/<?=$gligne['id']?>">Editer</a></td>
                </tr>
                </form>
        <?php endforeach; ?>


    </table>
        <!-- PERMET D OUVRIR UNE BOUCLE FOREACH AVEC UN MINIMUM DE PHP
            endforeach : referme le foreach
            bien se souvenir de la syntaxe -->
    

<?php include(ROOT.'/views/footer.php')?>