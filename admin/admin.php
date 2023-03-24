<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="../images/header_logo.png">
    <title>ADMINISTRATION</title>
    
</head>
<body>
<header>
    <a id="logo" href="../index.php"><img src="../images/header2_logo.jpg" alt="logo"></a>
	<nav>
        <a id="icon_menu" href="#"><img src="images/feen.png" alt=""></a>
    	<ul>
            
        	<li><a href="../index.php">Accueil</a></li>
            <li><a href="../listing.php">Discographie</a></li>
            <li><a href="../form_recherche.php">Rechercher</a></li>
            <li><a href="../admin/admin.php">Administration</a></li>
        </ul>
     </nav>
</header>

        <h1>Administration</h1>

<main>
    <div class="bouton_redirection">
        <a href="table1_gestion.php">
        <button class="bouton_clips">Gestion des clips</button>
    </a>    
        <a href="table2_gestion.php">
        <button class="bouton_formulaire">Gestion des producteurs des clips</button>
    </a>
    </div>

</main>

<?php
// Appel du Pied de Page
include "../footer.php";
?>
</body>
</html> 