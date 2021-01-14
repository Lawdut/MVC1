<?php

require_once('models/model.php');

function addEtudiant($pINE, $pnom, $pprenom, $page, $pmail, $pmdp) {

    $bdd = connexionBDD();
    $pmdp = password_hash($pmdp, PASSWORD_BCRYPT);
    $sql = $bdd->prepare('INSERT INTO etudiant (INE, nom, prenom, age, email, mdp ) VALUES (:INE,:nom,:prenom, :age, :mail, :mdp)');
    $sql->bindvalue(':INE', $pINE);
    $sql->bindvalue(':nom',$pnom);
    $sql->bindvalue(':prenom', $pprenom);
    $sql->bindvalue(':age', $page);
    $sql->bindvalue(':mail', $pmail);
    $sql->bindvalue(':mdp', $pmdp);

    $result = $sql->execute();
    return $result;

}
function connexEtudiant($email) {
    $bdd = connexionBDD();
    $sql = "SELECT * FROM etudiant WHERE email = '$email'";
    $login = $bdd->query($sql);


    $result = $login->fetch(PDO::FETCH_ASSOC);
    
    return $result;
}

?>