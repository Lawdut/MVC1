<?php

require_once('models/model.php');

function addCours($pcode, $ptitre, $plangage) {
    $bdd = connexionBDD();

    /*une manière sécurisée d'effectuer une requête dans la base de données
    requête préparée sera compilée et placée dans le cache
    plus sécurisé pas besoin de gérer la concaténation avec séparateur ...etc*/

    $sql = $bdd->prepare('INSERT INTO cours (code, titre, langage) VALUES (:code,:titre,:langage)'); //requête préparée
    $sql-> bindvalue(':code',$pcode, PDO::PARAM_STR); //PARAM_STR c'est pour spécifier qu'il s'agit d'un string
    $sql-> bindvalue(':titre',$ptitre, PDO::PARAM_STR); // bindvalue permet de lier la valeur $toto au paramètre :toto
    $sql-> bindvalue(':langage',$plangage, PDO::PARAM_STR); //PDO :: PARAM_INT pour spécifier qu'il s'agit d'un INT

    $result = $sql->execute();
    return $result;
}

function getCours() {
    $bdd= connexionBDD();
    $sql = "SELECT * FROM cours ORDER BY id";
    
    $resultGetCours = $bdd->query($sql);
    $ligne = $resultGetCours->fetchAll();

    return $ligne;
}

function getOneCours($id) {
    $bdd= connexionBDD();
    $sql = "SELECT * FROM cours WHERE id=".$id;
    
    $result = $bdd->query($sql);
    $data = $result->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function modifCours($id) {
    $bdd= connexionBDD();

    $sql= $bdd->prepare('UPDATE cours set code = :code, titre = :titre, langage = :langage WHERE cours.id = :id');
    
    $sql-> bindvalue(':id',$id);
    $sql-> bindvalue(':code',$_POST['code'], PDO::PARAM_STR);
    $sql-> bindvalue(':titre',$_POST['titre'], PDO::PARAM_STR); 
    $sql-> bindvalue(':langage',$_POST['langage'], PDO::PARAM_STR); 
    $modif = $sql->execute();

    //$modif = $sql->execute(array($mid['id'], $mcode['code'], $mtitre['titre'], $mlangage['langage']));
    return $modif;

}


?>