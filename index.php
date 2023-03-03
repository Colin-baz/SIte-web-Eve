<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="images/header_logo.png">
    <title>ACCUEIL</title>
    
</head>
<body>
<?php
    //Appel du bloc Header et du Menu>
    include "header.php";
    ?>
    <div class="banniere">
        
        <h1>ACCUEIL</h1>

    </div>
<main>
    <div class="bouton_redirection">
        <a href="listing.php">
        <button class="bouton_clips">Cliquez pour découvrir la listes des clips d'Eve</button>
    </a>
        <a href="form_recherche.php">
        <button class="bouton_formulaire">Cliquez pour effectuer une recherche dans la discographie</button>
    </a>
    </div>
<div class="texte">
    <p>Eve ( japonais : い ぶ, né le 23 mai 1995), anciennement connu sous le nom de Keitora (け い と ら) et Kurowa (ク ロ わ), est un auteur-compositeur-interprète japonais et producteur de Vocaloid .</p>
    <p>Sa musique a été présentée comme thème musical pour divers anime tels que Dororo (Dark Night / 闇夜), Jujutsu Kaisen (kaikaikitan /廻廻奇譚), Josee, the Tiger and the Fish (Ao No Waltz / 蒼 の ワ ル ツ), Chainsaw Man (Fight Song / フ ァ イ ト ソ ン グ) et My Hero Academia (Bokura no / ぼ く ら の).</p>
</div>

</main>

<?php
// Appel du Pied de Page
include "footer.php";
?>
</body>
</html> 