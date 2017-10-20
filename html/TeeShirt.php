<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title> Product </title>
	<link rel="stylesheet" type="text/css" href="../css/Style_Produit.css"/>
	<link rel="stylesheet" href="../css/css-template.css"/>

</head>

<body>

	<header>
    <div id="logo"><img src="../img/logo.png" width="100" height="100"></div>
    <div id="connect"><a href='Authentification.php'>Connexion </a></div>
    <h1 > My TeeShirt.com </h1>
    <nav>
        <ul>
        <li><a href='main.html'> Home </a></li>
        <li><a href='TeeShirt.php'> Products </a></li>
        <li><a href='recherche.html'> Search </a></li>
        <li> Button 1 </li>
        <li> Button 2 </li>
        </ul>       
    </nav>
</header>



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



<section>
<div class="content">		
	 	

  	  <div id="White">
  	  	<h1 id="position">
 	White tee shirt
	    </h1>
  	  	<img id="tshirtImage" src="../img/whiteteeshirt.jpg"> 
  	  </div>

	  <div id="Green">
	  	<h1 id="position"> Green tee shirt  </h1>
	  	<img id="tshirtImage" src="../img/greenteeshirt.jpg">
	  </div>


	 
	<script>
	  function changeit(val) {
	    document.getElementById("White").style.display="none";
	    document.getElementById("Green").style.display="none";
	    document.getElementById(val).style.display="block";
	  }
	</script>


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
			delivery included
		</p>

	<h2> Size 
		<select>
		<ul id="menu-vertical">	
			<option><li>XS</li></option>
			<option><li>S</li></option>
			<option><li>M</li></option>
			<option><li>L</li></option>
			<option><li>XL</li></option>
		</ul>
		</select>
	</h2>


	<h2> Raw </h2>
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

	<h2> Color
  <select name="choixcouleur" onChange="changeit(this.value)">
    <option value="White">White</option>
    <option value="Green" selected>Green</option>
  </select><br /><br />
	</h2>
	
		<h2> Ajoutez au panier
	    <img id="logo" src="../img/Panier.jpg">
		</h2>

</div>
</section>
	
<section>
<div class="comment">
		<p>
			guarantee <br>
			Pleasant touch <br>
			Machine Wash <br>
			A good quality basic t-shirt <br>

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

	</div>
</section>


<footer>
<div id=content>
<div id=fMenu1>
    <div id ="titre1"> Qui somme-nous ? </div>
    <ul><li> Info 1 </li>
        <li> Info 2 </li>
        <li> Info 3 </li>
        <li> Info 4 </li></ul>
</div>

<div id=fMenu2>
    <div id ="titre2"> Reseaux sociaux </div>
    <ul><li> Info 1 </li>
        <li> Info 2 </li>
        <li> Info 3 </li>
        <li> Info 4 </li></ul>
</div>

<div id=fMenu3>
    <div id ="titre3"> Menu 3 </div>
    <ul><li> Info 1 </li>
        <li> Info 2 </li>
        <li> Info 3 </li>
        <li> Info 4 </li></ul>
</div>
</div>
</footer>
<?php
echo '<script> changeit("White"); </script>'; 
?>
</body>
</html>