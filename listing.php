<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="images/header_logo.png">
    <title>CLIPS</title>
    
</head>
<body>
<?php
    //Appel du bloc Header et du Menu>
    include "header.php";
    ?>
<div class="banniere">

<h1>Les Clips de Eve</h1>

</div>

<main>
    <div class="discographie">
        
    <div class="gif">
     <img src="images/anime-eve.jpg" onmouseover="this.src='images/anime-eve.gif';"  onmouseout="this.src='images/anime-eve.jpg';" />
     <div class="gif_infos">
        <h3>Comment dévorer la vie - Eve MV</h3>
            <p>Clip produit par Mariyasu, avec plus de 76 Millions de vues sur YouTube</p>
    </div>
        </div>
    <div class="gif">
    <img src="images/dramaturgy.jpg" onmouseover="this.src='images/dramaturgy.gif';"  onmouseout="this.src='images/dramaturgy.jpg';" />
    <div class="gif_infos">
        <h3>Dramaturgy - Eve MV</h3>
            <p>Clip produit par Mah, avec près de 150 Millions de vues sur YouTube</p>
    </div>
        </div>
    <div class="gif">
    <img src="images/遊生夢死.jpg" onmouseover="this.src='images/遊生夢死.gif';"  onmouseout="this.src='images/遊生夢死.jpg';" />
    <div class="gif_infos">
        <h3>Yuseiboushi - Eve MV</h3>
            <p>Clip produit par niL, avec plus de 20 Millions de vues sur YouTube</p>
    </div>
    </div>
</main>

<?php
// Appel du Pied de Page
include "footer.php";
?>
</body>
</html> 