<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p>vous venez de modifier un album</p>
<hr>
<?php
$titre=$_POST['clip_titre'];
$annee=$_POST['clip_annee'];
$nbrvues=$_POST['clip_nbr_vues'];
$album=$_POST['clip_album'];
$type=$_POST['clip_type'];
$numproduct=$_POST['numproduct'];
$num=$_POST['num'];


$madisco = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Colinba1373');
$madisco->query('SET NAMES utf8;');

$imageName=$_FILES["photo"]["name"];

if($imageName!=""){
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
$req = 'UPDATE clip SET clip_titre="'.$titre.'", clip_annee='.$annee.', clip_nbr_vues='.$nbrvues.', clip_album='.$album.', clip_type='.$type.' _product_id='.$numproduct.' clip_photo="'.$nouvelleImage.'" WHERE bd_id='.$num;
 echo 'juste pour le debug: '. $req;
$resultat = $madisco->query($req);

?>
</tbody>
</table>
</body>
</html>