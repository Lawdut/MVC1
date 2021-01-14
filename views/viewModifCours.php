<?php include(ROOT.'/views/header.php');

?>

    <table>

        <h1> Liste des cours à modifier</h1>

        <tr>
            <th>Id</th>
            <th>Code</th>
            <th>Titre</th>
            <th>Langage</th>

        </tr>
     
                <tr>
                <form action ="controllerCours/modifOneCours/<?php echo $data['id']; ?>" method="POST">

                <td><label for = "id"></label><p><?php echo $data['id']; ?></p></td>
                <td><label for = "code"></label><input type ="text" name="code" value = "<?php echo $data['code']?>"></td>
                <td><label for = "titre"></label><input type ="text" name="titre" value = "<?php echo $data['titre']?>"></td>
                <td><label for = "langage"></label><input type ="text" name="langage" value = "<?php echo $data['langage']?>" ></td>
                <td><input type = "submit" value = "Editer"></td>
                </tr>
                </form>
    </table>
    
    <style>
        table{
            border-collapse: collapse; /* Les bordures du tableau seront collées */
        }
        td, th{
            border: 1px solid black;
        }
        
    </style>

<?php include(ROOT.'/views/footer.php')?>