<?php
require_once('models/modelCours.php');

function addOneCours() {
    if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage']) ) {
        addCours($_POST['code'],$_POST['titre'],$_POST['langage']); // on enregistre dans la BDD (voir formulaire)
    }
    require_once('views/viewCours.php');
}

function getAllCours() {
    $result = getCours();
    //var_dump(getOneCours());
    require_once('views/viewGetCours.php');
}
function modifOneCours($id) {

    //appel au model
    $data = getOneCours($id);
    
    if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage']) ) {
        $resultUpdate = modifCours($id);
        if (!$resultUpdate) {
            $message = "un problème est survenu, les mises à jour n'ont pas été effectuées !";
            //header
        }else {
            $message = "les mises à jour ont été bien effectuées";
        }
    }
    $data = getOneCours($id);
    require_once('views/viewModifCours.php');
}
?>