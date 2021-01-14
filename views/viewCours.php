<?php include(ROOT.'/views/header.php')?>
<body>
    <h2> Je suis la vue viewCours</h2>

        <form action ="controllerCours/addOneCours" method="POST">
        <label for ="code">Code du cours</label>
        <input type ="text" name="code">
        <label for = "code">titre</label>
        <input type ="text" name="titre">
        <label for = "code">langage</label>
        <input type ="text" name="langage">

        <input type = "submit" value="Valider">

        

        </form>

        

<?php include(ROOT.'/views/footer.php')?>