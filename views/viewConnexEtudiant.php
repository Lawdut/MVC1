<?php include(ROOT.'/views/header.php');?>

<form action ="controllerEtudiant/connexOneEtudiant" method="POST">
        <label for ="email">EMAIL</label>
        <input type ="text" name="email">
        <label for = "mdp">Mot de passe</label>
        <input type ="password" name="mdp">
        <input type = "submit" value="Valider">
</form>



<?php include(ROOT.'/views/footer.php')?>