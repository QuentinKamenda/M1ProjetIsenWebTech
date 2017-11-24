<!-- Edited by Thomas Jaffus -->


<!-- Première Partie de la page -->

	<section class="positionPage">
		<div class = "styleTitrePrincipal">		

				<!-- Titre dynamique -->
				<h1 id="position">

				<?php echo $donnees[0]['Photo']; ?>
			    </h1>

			    <!-- Image dynamique -->
				<img id="tshirtImage" src="<?php  echo $donnees[0]['Lien']; ?>">
		</div>
		 

		<div class="styleTitre">

			<!-- Price -->
			<h2>  Price </h2> 
				<p id="Price">

				<?php  echo $donnees[0]['Prix'] . '$'; ?>
				</p>
				<p id="delivery">
					Free delivery from 50$ purchase
				</p>
				<br>

			<!-- Size -->
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

			<!-- Raw -->
			<h2> Raw </h2> 
				<div class="rawStyle">
					<p>
					<?php  echo $donnees[0]['Matiere']; ?>
					</p>
					<br>
				</div>

			<!-- Color -->
			<h2> Color </h2> <br>
				<div class="rawStyle">
					<p>
					<?php  echo $donnees[0]['Couleur']; ?>
					</p>
					<br>
				</div>

			<!--<button class="buttonBis"></button> &nbsp;
			<button class="buttonBis colorButtonBis"></button> 
			<br><br><br> -->
		
			<!-- Add to basket -->
			<h2>
				<button class="buttonAchat">ADD TO BASKET</button>
			    <img class="logo" src="../img/Panier.jpg">
			</h2>
			<br><br>

		</div>

			<!-- Product Information -->
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

		<!-- Description -->
		<h2 class ="styleComment"> Description</h2>
			<div class="description">	
				<p>
					    <?php echo $donnees[0]['Description']; ?>
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

			<!-- Image de gauche -->
			<div class="blocleft">
				<img class="lastArticle" src="../img/Tshirt/image0.jpeg"> <br>
					<p id ="Price2"> T-shirt noir Rocker <br>
					    14.9$ <br>
					</p>
				<a href="index.php?action=/TeeShirt&id=1"><button class="buttonDiscover"> Go to Article </button></a>
			</div>

			<!-- Image de droite -->
			<div class="blocright">
				<img class="lastArticle" src="../img/Tshirt/image3.jpeg"><br>
					<p id ="Price2"> Batman <br>
					    15.9$ <br>
					</p>
				<a href="index.php?action=/TeeShirt&id=4"><button class="buttonDiscover"> Go to Article </button></a>
			</div>

			<!-- Image du milieu -->
			<div class="blocmiddle">
				<img class="lastArticle" src="../img/Tshirt/image1.jpeg"><br>
					<p id ="Price2"> T-shirt bleu Simple <br>
					    15.9$ <br>
					</p>
				<a href="index.php?action=/TeeShirt&id=2"><button class="buttonDiscover"> Go to Article </button></a>
			</div>
				
	</section>
		<?php
		echo '<script> changeit("White"); </script>'; 
		?>