<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
<hr> <h1>gestion de nos albums</h1> <hr>

<?php
// recupérer dans l'url l'id de l'album à supprimer
$album_id=$_GET['num'];

$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
$madisco->query('SET NAMES utf8;');

// tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
$req = 'DELETE FROM clip WHERE clip_id = '.$album_id; 

// cette ligne sert juste pour le debug. à supprimer quand tout marche correctement  
echo $req;
 
$resultat = $madisco->query($req);

echo '<h2>vous venez de supprimer l\'album numéro '.$album_id.'.</h2>';
?>

</body>
</html>