<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	
<h1>gestion de nos albums</h1>
<p>vous venez de modifier un album</p>

<?php
$titre=$_POST['titre'];
$annee=$_POST['annee'];
$nbrvues=$_POST['nbvues'];
$album=$_POST['album'];
$type=$_POST['type'];
$numproduct=$_POST['numproducteur'];
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

			$req = 'UPDATE clip SET clip_titre="'.$titre.'", clip_annee="'.$annee.'", clip_nbr_vues="'.$nbrvues.'", clip_album="'.$album.'", clip_type="'.$type.'", _product_id='.$numproduct.', clip_photo="'.$nouvelleImage.'" WHERE clip_id='.$num;
		}
else{
   $req = 'UPDATE clip SET clip_titre="'. $titre . '", clip_annee="' .$annee.'", clip_nbr_vues="'.$nbrvues.'", clip_album="'.$album.'", clip_type="'.$type.'",_product_id='.$numproduct.' WHERE clip_id='.$num ;
	}

 echo 'juste pour le debug: '. $req;
$resultat = $madisco->query($req);

?>
</tbody>
</table>
</body>
</html>