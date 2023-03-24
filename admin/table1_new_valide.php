<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<h2>vous venez d'ajouter un article</h2>
<hr>
<?php
$titre=$_POST['titre'];
$annee=$_POST['annee'];
$nbrvues=$_POST['nbvues'];
$album=$_POST['album'];
$type=$_POST['type'];
$numproduct=$_POST['numproducteur'];

$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
$madisco->query('SET NAMES utf8;');

//vérification du format de l'image téléchargée
$imageType=$_FILES["photo"]["type"];
if ( ($imageType != "image/png") &&
	($imageType != "image/jpg") &&
	($imageType != "image/jpeg") ) {
		echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
		echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
		die();
}

//creation d'un nouveau nom pour cette image téléchargée
// pour éviter d'avoir 2 fichiers avec le même nom
$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];


// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	"../images/uploads/".$nouvelleImage)) {
		echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
		die();
	}
} else {
	echo '<p>Problème : image non chargée...</p>'."\n";
	die();
}
$req = 'INSERT INTO clip(clip_titre,clip_annee,clip_nbr_vues,clip_album,clip_type,_product_id,clip_photo) VALUES("'.$titre.'","'.$annee.'", "'.$nbrvues.'","'.$album.'","'.$type.'",'.$numproduct.',"'.$nouvelleImage.'" )';
echo 'Le clip a été ajouté avec succès';
$resultat = $madisco->query($req);

?>
</tbody>
</table>
</body>
</html>