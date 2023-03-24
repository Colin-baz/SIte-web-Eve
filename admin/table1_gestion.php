<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<title>Gestion des clips</title>
    <style>
        img{
            height: 150px;
            width: max-content;
        }
    </style>
</head>
<body>
<a id="logo" href="../index.php"><img src="../images/header2_logo.jpg" alt="logo"></a>
<a href="../index.php">Retour au site</a> 	

<h1>Gestion de nos albums</h1>
<p>Bienvenue dans la partie gestion des clips, c'est ici que la magie opère...</p>

<a href="table1_new_form.php">Ajouter un album</a>
<table border=1>
	<thead>
		<tr><td>titre</td><td>année</td><td>Nombre de vues</td><td>album</td><td>type de clip</td><td>Image</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
$madisco->query('SET NAMES utf8;');
$req = "SELECT * FROM clip";
$resultat = $madisco->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['clip_titre'] . '</td>';
    echo '<td>' . $value['clip_annee'] . '</td>';
    echo '<td>' . $value['clip_nbr_vues'] . '</td>';
    echo '<td>' . $value['clip_album'] . '</td>';
    echo '<td>' . $value['clip_type'] . '</td>';
    echo '<td> <img src="../images/uploads/'.$value['clip_photo'].'"></td>';
    echo '<td> <a href="table1_delete.php?num='.$value['clip_id'].'"> supprimer </a> </td>';
    echo '<td> <a href="table1_update_form.php?num='.$value['clip_id'].'" > modifier </a> </td>';
    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>