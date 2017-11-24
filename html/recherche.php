<!DOCTYPE html>
<html>
<head>
	<title>My Tee-Shirt</title>
    <link rel="stylesheet" href="../css/css-template.css"/>
	<link rel="stylesheet" type="text/css" href="../css/rechercher.css">
</head>


<body>


	<div id="searchbar" >

                <form action="index.php" class="recherche" method="get">
                  <input type="hidden" name="action" value="recherche"/>
                  <input type="text" name="recherche" class="searchbar"/>
                  <input  class="buttonSearch" type="submit" value="research" />
                </form>
    </div>


	<?php
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=technoweb;charset=utf8','root','');
		} catch (Exception $e) {
			die('Erreur:' -$e ->getMessage());
		}
    if(isset($_GET['recherche'])){
		    $result =$bdd ->prepare("SELECT * FROM `recherche` WHERE `Photo` Like '%".$_GET['recherche']."%'");
    } else {
        $result =$bdd ->prepare("SELECT * FROM `recherche` Order By id");
    }
		

    function test(){
    $result->execute(array(0));
		 while ($donnees = $result->fetch()) {
       if(($donnees['id']+3)%4==0){
         echo '<div class="col-container">';
       }
        echo '<div class="lig">';
        echo '<div class="image2">';
         echo'<img src=" '.$donnees['Lien'].' " class = "image1" onclick="window.location.href=\'index.php?action=/model/TeeShirt&id='.$donnees['id'].'\'" />'.PHP_EOL;
        echo '</div>';
        echo '<div class="text">';
        echo ''.$donnees['Photo'].'<br />'.PHP_EOL;
        echo '</div>';
        echo '</div>';
        if(($donnees['id'])%4==0){
          echo '</div>';
        }
     }
    $result->closeCursor();
	?>
}
</body>



</hmtl>
