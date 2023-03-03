<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8" />
         <title>FORMULAIRE</title>
         <link rel="icon" href="images/header_logo.png">
         <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <?php
            //Appel du bloc Header et du Menu>
            include "header.php";
        ?>
         <h1>Connexion</h1>
        <form method="post" action="traitement.php">

            <label for="prenom">Votre prénom : </label>
            <input type="text" name="prenom" id="prenom"><br />
            <label for="age">Votre âge : </label>
            <input type="number" name="age" id="age"> ans.<br />
            <?php
                    if (isset($_GET['erreurage'])) {
                        echo '<span>Erreur d age, veuillez saisir un nombre</span>';
                    }
                ?>
            <input type="submit" value="Envoyer">
        </form>

        <?php
            //Appel du bloc Header et du Menu>
            include "footer.php";
        ?>
     </body>
</html>