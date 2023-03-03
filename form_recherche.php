<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="images/header_logo.png">
    <title>Rechercher</title>
    
</head>
<body>
<?php
    //Appel du bloc Header et du Menu>
    include "header.php";
    ?>
<div class="banniere">

<h1>Rechercher</h1>

</div>

<main>

    <form method="post" action="traitement.php">

    <div class="form_recherche">
        <label for="titre">Titre du clip : </label>
            <input type="text" name="titre" id="titre"><br />
    </div>

    <div class="form_bouton">
            <input type="submit" value="Chercher les clips correspondants">
    </div>
    <form>
</main>

<?php
// Appel du Pied de Page
include "footer.php";
?>
</body>
</html> 