<?php include(ROOT.'/views/header.php');?>
<h2> Je suis la vue viewEtudiant</h2>

        <h3> Inscription</h3>

        <form action ="controllerEtudiant/addOneEtudiant" method="POST">
        <label for ="code">INE</label>
        <input type ="text" name="INE">
        <label for = "code">Nom</label>
        <input type ="text" name="nom">
        <label for = "code">Prenom</label>
        <input type ="text" name="prenom">
        <label for = "code">Age</label>
        <input type ="text" name="age">

        <label for = "code">Email</label>
        <input type ="text" name="email">
        <label for = "code">Mot de passe</label>
        <input type ="text" name="mdp">


        <input type = "submit" value="Valider">
         
    </form>

    <?php include(ROOT.'/views/footer.php')?>

