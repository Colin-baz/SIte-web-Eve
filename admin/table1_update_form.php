<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos clips</h1>
<p>modifier ici un clip</p>
    <?php
        $num = $_GET['num'];
        $madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
        $madisco->query('SET NAMES utf8;');
        $req = 'SELECT * FROM clip WHERE clip_id = '.$num;
        $resultat = $madisco->query($req);
        $clip = $resultat->fetch();
?>
<hr>
<form method="POST" action="table1_update_valide.php" enctype="multipart/form-data">

    <input type="hidden" name="num" value="<?php echo $clip['clip_id']?>"><br>

    titre:<input type="text" name="titre" value="<?php echo $clip['clip_titre']?>"><br>
    année:<input type="text" name="annee" value="<?php echo $clip['clip_annee']?>"><br>
    nombre de vues:<input type="text" name="nbvues" value="<?php echo $clip['clip_nbr_vues']?>"><br>
    album:<input type="text" name="album" value="<?php echo $clip['clip_album']?>"><br>
    type de clip:<input type="text" name="type" value="<?php echo $clip['clip_type']?>"><br>
    Photo : <input type="file" name="photo"/><br/>
    numero du producteur:
    <select name="numproducteur" id="#">
    <?php
		$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
		$mabd->query('SET NAMES utf8;');
		$req = "SELECT * FROM  product ";
		$resultat = $mabd->query($req);

foreach ($resultat as $value) {
        $selection="";
        if($clip['_product_id'] == $value['product_id']) $selection="selected";          
        echo '<option '.$selection . ' value="' .  $value['product_id'] . '"> ' .  $value['product_nom'] . '</option>';
        }
?>
    </select>
    <input type="submit" name="Modifier">
</form>

</tbody>
</table>
</body>
</html>