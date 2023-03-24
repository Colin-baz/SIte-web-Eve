<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion des producteurs</h1>
<p>modifier ici un producteur</p>
    <?php
        $num = $_GET['num'];
        $madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
        $madisco->query('SET NAMES utf8;');
        $req = 'SELECT * FROM product WHERE product_id = '.$num;
        $resultat = $madisco->query($req);
        $product = $resultat->fetch();
?>
<hr>
<form method="POST" action="table2_update_valide.php" enctype="multipart/form-data">

    <input type="hidden" name="num" value="<?php echo $product['product_id']?>"><br>

    Nom:<input type="text" name="nom" value="<?php echo $product['product_nom']?>"><br>
    Prénom:<input type="text" name="prenom" value="<?php echo $product['product_prenom']?>"><br>
    Genre:<input type="text" name="genre" value="<?php echo $product['product_genre']?>"><br>

    <input type="submit" name="Modifier">
</form>

</tbody>
</table>
</body>
</html>