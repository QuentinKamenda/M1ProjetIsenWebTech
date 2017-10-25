<!-- Edited by Thomas Jaffus -->

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title> Product </title>
	<link rel="stylesheet" type="text/css" href="../css/StylesProduit.css"/>
	<link rel="stylesheet" href="../css/css-template.css"/>

</head>

<body>

     	<?php 
    		try
    		{
    		 	$bdd = new PDO('mysql:host=localhost;dbname=teeshirt;charset=utf8', 'root', 'Isen2016'); 
    		}
    		catch (Exception $e)
    		{
    			die('Erreur : ' . $e -> getMessage());
    		}
    	?>

<!-- Première Partie de la page -->

	<section class="positionPage">
		<div class = "styleTitrePrincipal">		

			<div id="Green">
				<h1 id="position"> Green tee shirt  </h1>
				<img id="tshirtImage" src="../img/greenteeshirt.jpg">
		</div>
		 

		<div class="styleTitre">
			<h2>  Price </h2> 
				<p id="Price">

				<?php

				$selection = 2;

				?>

				<?php

				$reponse = $bdd->prepare('SELECT Prix FROM recherche where id = ?');
				$reponse->execute(array($selection));

				while ($donnees = $reponse->fetch())
				{
				    echo $donnees['Prix'] . '$';
				}
				$reponse->closeCursor();

				?>
				</p>
				<p id="delivery">
					Free delivery from 50$ purchase
				</p>
				<br>

			<h2> Size : <span id="result"> </span> </h2> <br>

				<div id="selectionTaille">
				    <button class="styleTaille" id="XS">XS</button>
				    <button class="styleTaille" id="S">S</button>
				    <button class="styleTaille" id="M">M</button>
				    <button class="styleTaille" id="L">L</button>
				    <button class="styleTaille" id="XL">XL</button>
				</div>
			<br><br><br>

				<script>
				    var result = document.getElementById('result');

				    selectionTaille.addEventListener('click', function(e) {

				    result.innerHTML = e.target.id;
				    });
				</script>


			<h2> Raw </h2> 
				<div class="rawStyle">
					<p>
					<?php

					$reponse = $bdd->prepare('SELECT Matiere FROM recherche where id = ?');
					$reponse->execute(array($selection));

					while ($donnees = $reponse->fetch())
					{
					    echo $donnees['Matiere'];
					}
					$reponse->closeCursor();

					?>
					</p>
					<br>
				</div>

			<h2> Color
		 		
			</h2> <br>
	
			<button class="buttonBis"></button> &nbsp;
			<button class="buttonBis colorButtonBis"></button>
			<br><br><br>
		
			<h2>
				<button class="buttonAchat">ADD TO BASKET</button>
			    <img class="logo" src="../img/Panier.jpg">
			</h2>
			<br><br>

		</div>

			<h2 class ="styleComment"> Product Information </h2>

		<div class="comment">			
			<p>
				<img id="tailleLogo" src="../img/check.jpeg">
					Machine Wash <br>
				<img id="tailleLogo" src="../img/check.jpeg">
					Made from recycled materials <br>
				<img id="tailleLogo" src="../img/check.jpeg">
					Made in Europe 
			</p>
			<br><br>
		</div>

		<h2 class ="styleComment"> Description</h2>
			<div class="description">	
				<p>
					<?php

					$reponse = $bdd->prepare('SELECT Description FROM recherche where id = ?');
					$reponse->execute(array($selection));

					while ($donnees = $reponse->fetch())
					{
					    echo $donnees['Description'];
					}
					$reponse->closeCursor();

					?>
				</p>
				<br>
			</div>
	</section> <br>


<!-- Deuxième Partie de la page -->

	<section class="positionPagePartieDeux">
		<div class = "styleTitreSecondaire">	
			<br><h1> Even more to discover </h1><br>
		</div>
		
		<h2 class="styleComment"> Last viewed articles </h2><br>
			<div class="blocleft">
				<img class="lastArticle" src="../img/image0.jpeg"> <br>
					<p id ="Price2">Titre <br>
					    Prix <br>
					</p>
				<button class="buttonDiscover"> Go to Article </button>
			</div>
			<div class="blocright">
				<img class="lastArticle" src="../img/image3.jpeg"><br>
					<p id ="Price2">Titre <br>
					    Prix <br>
					</p>
				<button class="buttonDiscover"> Go to Article </button>
			</div>
			<div class="blocmiddle">
				<img class="lastArticle" src="../img/image1.jpeg"><br>
					<p id ="Price2">Titre <br>
					    Prix <br>
					</p>
				<button class="buttonDiscover"> Go to Article </button>
			</div>
				

	</section>
		<?php
		echo '<script> changeit("White"); </script>'; 
		?>
</body>
</html>