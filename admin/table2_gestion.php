<!DOCTYPE html>
<html>
<head>
	<title>Gestion des producteurs</title>
    <style>
    </style>
</head>
<body>
<a href="../index.php">retour au site</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<hr>
<a href="table2_new_form.php">ajouter un producteur</a>
<table border=1>
	<thead>
		<tr><td>Nom du Producteur</td><td>Prénom du Producteur</td><td>Genre</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
$madisco->query('SET NAMES utf8;');
$req = "SELECT * FROM product";
$resultat = $madisco->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['product_nom'] . '</td>';
    echo '<td>' . $value['product_prenom'] . '</td>';
    echo '<td>' . $value['product_genre'] . '</td>';
    echo '<td> <a href="table2_delete.php?num='.$value['product_id'].'"> supprimer </a> </td>';
    echo '<td> <a href="table2_update_form.php?num='.$value['product_id'].'" > modifier </a> </td>';
    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>