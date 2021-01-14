<footer>

<?php

if(isset($_SESSION['email'])){
    

    echo('<tr>');

    echo '<a href = controllerInscription/getInfoEtudiant/'.$_SESSION['id'].'><button>Vos informations</button></a>';

    //Bouton inscription
    echo('<form action ="controllerInscription/getListeCoursIns" method="POST">');
    echo('<td><input type = "submit" name="inscriptionCours" value="Inscription à un nouveau cours"></td>');
    echo('</form>');

    //Bouton déconnexion
    echo('<form action ="controllerEtudiant/deconnexEtudiant" method="POST">');
    echo('<td><input type = "submit" name="deconnexion" value="Déconnexion"></td>');
    echo('</form>');

    echo('</tr>');
    
    echo "Vous êtes connecté : " .$_SESSION['email'];
    
}

?>

</footer>
<style>
        table{
            border-collapse: collapse; 
        }
        td, th{
            border: 1px solid black;
        }
        
    </style>
</body>
</html>