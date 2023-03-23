<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="icon" href="../images/header_logo.png">
    <title>ADMINISTRATION</title>
    
</head>
<body>
<?php
    //Appel du bloc Header et du Menu>
    include "../header.php";
    ?>
    <div class="banniere">

        <h1>Administration</h1>

    </div>
<main>
    <div class="bouton_redirection">
        <a href="table1_gestion.php">
        <button class="bouton_clips">Gestion des clips</button>
    </a>    
        <a href="table2_gestion.php">
        <button class="bouton_formulaire">Gestion des directeurs/producteurs des clips</button>
    </a>
    </div>

</main>

<?php
// Appel du Pied de Page
include "../footer.php";
?>
</body>
</html> 