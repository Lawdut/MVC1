<?php
session_start();
/*ini_set('session.gc_maxlifetime', 30);
session_set_cookie_params(30);*/



//$_SESSION = array();

//echo $_SERVER['SCRIPT_FILENAME']; // sert à récupérer le chemin de l'index

//echo "Requête : ".$_SERVER['QUERY_STRING']; 
//sert à récupérer la valeur "QUERY_STRING"  
//exemple : /cours/actionAjouter/24
//charger le controller cours 
//executer actionAjouter
//récupérer le paramètre 24


$root = str_replace('index.php' , '' , $_SERVER['SCRIPT_FILENAME']) ; // on remplace index.php par rien ""
define('ROOT', $root); //déclaration de la constante (en l'occurence "root") 

//echo "<h2> Je suis index : router de l'application MVC procedurale</h2>";

//echo $_GET['action'];

$params = explode("/", $_GET['action']);


    if($params[0] != "") {

        $controller = $params[0];
        $action ="";
        if (isset($params[1])) {
            $action = $params[1];
            //on a controller et action
            //on inclut donc ce controller
        }
            require_once(ROOT.'controllers/'.$controller.'.php');

            //le folder controller n'est pas trouvable (relatif)
            //vu qu'on a
            //modifié l'URL
            //pour savoir où on se trouve affiche l'URL complet
            //echo $_SERVER['SCRIPT_FILE'];
            //on va supprimer index.php
        

        //on vérifie si l'action existe dans le controller qu'on vient de charger
        if (function_exists($action)){ //on vérifie si la fonction existe avec "function_exist
            if (isset($params[2]) && isset($params[3])) {
                $action($params[2], $params[3]);
            }
            else if (isset($params[2])){
                $action($params[2]);
            }
            else {
                $action();
            }
        }else {
            echo "page par defaut";
        }

    }
    else {
        echo "aucune action n'existe";
    }


?>

