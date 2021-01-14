<?php
require_once('models/modelInscription.php');



function getListeCoursIns() {

    $ligne = coursInscription();
    require_once('views/viewlisteCoursInscription.php');
    
}

function inscriptionCours($id_C, $id_E) {
    $dataC = $id_C;
    $dataE = $id_E;
    inscriptionOneCours($dataC, $dataE);
    require_once('views/viewInscripValid.php');
}


function getInfoEtudiant($id1) {
    $id = $id1;
    //var_dump($id1);
    //var_dump($_SESSION['id']);
    $resultat2 = infoEtudiantIncription($id);

    require_once('views/viewInfoEtudiant.php');
}

?>