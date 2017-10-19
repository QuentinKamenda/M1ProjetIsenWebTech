<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title> Product Black tee shirt </title>
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





	<div class="content">		
	

	<h1 id="position"> Black tee shirt  </h1>
 	  <img id="tshirtImage" src="../img/greenteeshirt.jpg">



	<h2>  Price </h2>
	<p id="Price">
		14,90 €
	</p>
	<p id="delivery">
		delivery included
	</p>
	<h2> Size 
	<select>
	
	<ul id="Compact">
		
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
		80% Cotton
		15% Polyester
		5% Elastan

	</p>
	<h2> Color

		<select>
	
	<ul id="Compact">
		
		<option><li>Black</li></option> <?php $couleur = "Black" ?>
		<option><li>White</li></option> <?php $couleur = "White" ?>
		<option><li>Green</li></option> <?php $couleur = "Green" ?>
		<option><li>Grey</li></option> <?php $couleur = "Grey" ?>
		<option><li>Red</li></option> <?php $couleur = "Red" ?>
	</ul>
	</select>
	</h2>

	
	<h2> Ajoutez au panier
    <img id="logo" src="../img/Panier.jpg">
	</h2>

	</div>

	<div class="comment">
		<p>
			Pleasant touch <br>
			Machine Wash <br>
			A good quality basic t-shirt
		</p>

	</div>

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

</body>


</html>