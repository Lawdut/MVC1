<?php

require_once('models/model.php');


function coursInscription() {
    $bdd= connexionBDD();
    $sql = "SELECT * FROM cours ORDER BY id";
    
    $resultGetCours = $bdd->query($sql);
    $ligne = $resultGetCours->fetchAll();

    return $ligne;
}




function inscriptionOneCours($id_cours, $id_etudiant) {
    $bdd= connexionBDD();
    $sql = $bdd->prepare('INSERT INTO inscription (id_cours, id_etudiant, date_inscription) VALUES (:id_cours,:id_etudiant, NOW())');
    $sql-> bindvalue(':id_cours',$id_cours,PDO::PARAM_STR);
    $sql-> bindvalue(':id_etudiant',$id_etudiant,PDO::PARAM_STR);
    
    $resultat1 = $sql->execute();

    return $resultat1;
}

function infoEtudiantIncription($id){ 
    $bdd = connexionBDD();
    $sql="SELECT * FROM inscription INNER JOIN cours ON inscription.id_cours = cours.id WHERE id_etudiant =".$id;
    $inscr = $bdd->query($sql);

    $resultat2 = $inscr->fetchAll(PDO::FETCH_ASSOC);

    return $resultat2;
}
?>