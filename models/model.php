<?php

function connexionBDD() {

    try {
        $bdd = new PDO("mysql:host=localhost; dbname=formation", "root", "root");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }catch(PDOException $ex){
        echo 'erreur DBB :'.$ex;
    }
}

?>