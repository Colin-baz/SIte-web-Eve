<?php
    if ( (empty($_POST['titre'])) ) {
        header('Location: form_recherche.php');
    }
    $titre = $_POST['titre'];
     $titre =  filter_var( $titre ,  FILTER_SANITIZE_STRING );
?>
 <html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="images/header_logo.png">
    <title>RESULTATS</title>
    
</head>
    <body>

    <?php
        //Appel du bloc Header et du Menu>
        include "header.php";
    ?>

  <h1> Résultats de la recherche </h1>
  <main>
    <div class="reponse">
    <?php
        echo '<p>Voici les résultats trouvés pour <b>'.$titre.'</b> : </p>'."\n";   
    ?>
    </div>
        <div class="discographie">
        
    <div class="gif">
     <img src="images/anime-eve.jpg" onmouseover="this.src='images/anime-eve.gif';"  onmouseout="this.src='images/anime-eve.jpg';" />
            <p></p>
        </div>
    <div class="gif">
    <img src="images/dramaturgy.jpg" onmouseover="this.src='images/dramaturgy.gif';"  onmouseout="this.src='images/dramaturgy.jpg';" />
            <p></p>
        </div>
    <div class="gif">
    <img src="images/遊生夢死.jpg" onmouseover="this.src='images/遊生夢死.gif';"  onmouseout="this.src='images/遊生夢死.jpg';" />
            <p></p>
    </div>
    
    
  </main>

    <?php
        // Appel du Pied de Page
        include "footer.php";
    ?>

    </body>
 </html>