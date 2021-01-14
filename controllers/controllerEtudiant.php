<?php
require_once('models/modelEtudiant.php');

function addOneEtudiant(){
    if (!empty($_POST['INE']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) ) {
        addEtudiant($_POST['INE'], $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['email'], $_POST['mdp']);
    }
    require_once('views/viewEtudiant.php');

}
function connexOneEtudiant(){
    if (!empty($_POST['email']) && !empty($_POST['mdp']) ){
    $email = $_POST['email'];
    //$mdp = $_POST['mdp'];
    
    $login = connexEtudiant($email);
    $mdpbase = $login['mdp'];
    //$id = $login['id'];
    
    //var_dump($login['mdp']);

        if (password_verify($_POST['mdp'], $mdpbase)) {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $login['id'];
            //var_dump($_SESSION['id']);
            /*if(isset($_SESSION['email'])){
                require_once('views/footer.php');
                print_r($_SESSION['email']);
                echo("<p>Vous êtes connecté</p>");
                echo('<form action ="controllerEtudiant/deconnexEtudiant" method="POST">');
                echo('<label for = "deconnexion"></label><input type = "submit" name="deconnexion" value="Déconnexion">');
                echo('</form>');
            }*/
        }
        else {
            echo ("Mauvais mot de passe ou email");
        }
    
    }
    require_once('views/viewConnexEtudiant.php');
}

function deconnexEtudiant() {
    
        session_destroy();
        unset($_SESSION);
        connexOneEtudiant();
    
    
}

?>