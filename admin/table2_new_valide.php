<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
	
<h1>gestion des producteurs</h1>
<h2>vous venez d'ajouter un producteur</h2>

<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$genre=$_POST['genre'];

$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
$madisco->query('SET NAMES utf8;');
$req = 'INSERT INTO product(product_nom,product_prenom,product_genre) VALUES("'.$nom.'","'.$prenom.'", "'.$genre.'")';
echo 'Le producteur a été ajouté avec succès';
$resultat = $madisco->query($req);

?>
</tbody>
</table>
</body>
</html>