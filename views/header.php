

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
    
    <header>
    <base href = "http://localhost:81/MVC1/">

        <p>
            <a href = "controllerCours/addOneCours"> Ajouter un cours </a>
            <a href = "controllerCours/getAllCours"> Liste des cours </a>
            <a href = "controllerEtudiant/addOneEtudiant"> Ajouter un étudiant</a>
            <a href = "controllerEtudiant/connexOneEtudiant"> Connexion de l'étudiant</a>


            <?php //echo "Vous êtes connecté : " .$_SESSION['email']; ?>
    </header>
