<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
	
<h1>gestion des producteurs</h1>
<p>vous venez de modifier un producteur</p>

<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$genre=$_POST['genre'];
$num=$_POST['num'];

$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
$madisco->query('SET NAMES utf8;');

$req = 'UPDATE product SET product_nom="'. $nom . '", product_prenom="' .$prenom.'", product_genre="'.$genre.'" WHERE product_id='.$num ;

 echo 'Le producteur a été modifié avec succès';
$resultat = $madisco->query($req);

?>
</tbody>
</table>
</body>
</html>