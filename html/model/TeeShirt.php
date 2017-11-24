<?php 
try
{
 	$bdd = new PDO('mysql:host=localhost;dbname=technoweb;charset=utf8', 'root', ''); 
}
catch (Exception $e)
{
	die('Erreur : ' . $e -> getMessage());
}

if(isset($_GET['id'])){
    $selection=$_GET['id'];
}
else{
    $selection=2;
}

$reponse = $bdd->prepare('SELECT Photo, Lien, Prix, Matiere, Couleur, Description FROM recherche where id = ?');
$reponse->execute(array($selection));

$donnees = $reponse->fetchAll();

$reponse->closeCursor();

?>
