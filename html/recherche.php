<!DOCTYPE html>
<html>
<head>
	<title>My Tee-Shirt</title>
    <link rel="stylesheet" href="../css/css-template.css"/>
	<link rel="stylesheet" type="text/css" href="../css/rechercher.css">
</head>


<body>
<header>
    <div id="logo"><img src="../img/logo.png" width="100" height="100"></div>
    <div id="connect"> Connexion </div>
    <h1> My TeeShirt.com </h1>
    <nav>
        <ul>
        <li> Home </li>
        <li> Products </li>
        <li> Search </li>
        <li> Button 1 </li>
        <li> Button 2 </li>
        </ul>
    </nav>
</header>

<div>
<div class="box">

		<h1>find a product</small></h1>

	<div id="searchbar" >

                <form action="" class="formulaire">
               <input class="champ" type="text" />
                    <input class="bouton" type="button" value="research" />

                </form>
    </div>
</div>
	<!-- Responsive Image Tiles - START -->
	<?php
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=recherche;charset=utf8','root','');

		} catch (Exception $e) {
			die('Erreur:' -$e ->getMessage());
		}
		$result =$bdd ->prepare('SELECT `Photo` FROM `recherche` WHERE id=1 ');
		$result->execute(array(0));
		echo $_GET['Photo'];
	?>

	<div class="col-container">
		<div class="col">
			<div class="image">
					<img src="..\img\image0.jpeg"/>
			</div>
			<div class="text"> <?  ?> </div>
		</div>
		<div class="col" >
			<div class="image" >
				<img src="..\img\image0.jpeg"/>
			</div>
			<div class="text"> Mon texte </div>
		</div>
		<div class="col" >
			<div class="image">
				<img src="..\img\image0.jpeg"/>
			</div>
			<div class="text"> Mon texte </div>
		</div>
		<div class="col" >
			<div class="image">
				<img src="..\img\image0.jpeg"/>
			</div>
			<div class="text"> Mon texte </div>
		</div>
	</div>
	<div class="col-container">
		<div class="col">
			<div class="image">
					<img src="..\img\image0.jpeg"/>
			</div>
			<div class="text"> Mon texte </div>
		</div>
		<div class="col" >
			<div class="image" >
				<img src="..\img\image0.jpeg"/>
			</div>
			<div class="text"> Mon texte </div>
		</div>
		<div class="col" >
			<div class="image">
				<img src="..\img\image0.jpeg"/>
			</div>
			<div class="text"> Mon texte </div>
		</div>
		<div class="col" >
			<div class="image">
				<img src="..\img\image0.jpeg"/>
			</div>
			<div class="text"> Mon texte </div>
		</div>
	</div>



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



</hmtl>
