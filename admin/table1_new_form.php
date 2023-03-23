<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos clips</h1>
<p>ajouter ici un clip</p>
<hr>
<form method="POST" action="table1_new_valide.php" enctype="multipart/form-data">
    
    titre:<input type="text" name="titre"><br>
    année:<input type="text" name="annee"><br>
    nombre de vues:<input type="text" name="nbvues"><br>
    album:<input type="text" name="album"><br>
    type de clip:<input type="text" name="type"><br>
    Photo : <input type="file" name="photo"/><br/>
    numero du producteur:
    <select name="numproducteur" id="#">
    <?php
		$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
		$madisco->query('SET NAMES utf8;');
		$req = "SELECT * FROM  product ";
		$resultat = $madisco->query($req);

foreach ($resultat as $value) {
            echo '<option value='.$value['product_id'].'>'.$value['product_nom'].'</option>';
        }
?>
    </select>
    <input type="submit" name="Ajouter">
</form>

</tbody>
</table>
</body>
</html>