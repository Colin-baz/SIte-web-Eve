<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="images/header_logo.png">
    <title>CLIPS</title>
    
</head>
<body>
<?php
    //Appel du bloc Header et du Menu>
    include "header.php";
    ?>
<div class="banniere">

<h1>Les Clips de Eve</h1>

</div>

<main>
    <div class="discographie">
<?php
/*connexion à la base de données*/
$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
$madisco->query('SET NAMES utf8;');
/*preparation de la requete*/
$req = "SELECT * FROM clip INNER JOIN product ON clip._product_id = product.product_id";
/*execution de la requete*/
$resultat = $madisco->query($req);

foreach ($resultat as $value) {
    echo '<div class="clips">' ;
    echo '<img src="images/uploads/'.$value['clip_photo'].'"/>';
    echo '<h3>'.$value['clip_titre'] . '</h3>';
    echo '<p>Année de sortie: ' . $value['clip_annee'] . '</p>';
    echo '<p>Nombres de vues: ' . $value['clip_nbr_vues'] . ' vues </p>';
    echo '<p>Album: ' . $value['clip_album'] . ' </p>';
    echo '<p>Type de clip: ' . $value['clip_type'] . ' </p>';
    echo '<p>Nom et prénom du producteur du clip: ' . $value['product_nom'] . ' ' . $value['product_prenom'] . ' </p>';
    echo '</div>';
}
?>
    </div>
</main>

<?php
// Appel du Pied de Page
include "footer.php";
?>
</body>
</html> 