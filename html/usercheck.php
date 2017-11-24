


	<?php
		$conn = new PDO('mysql:host=localhost;dbname=technoweb;charset=utf8','root','');
		$req = $conn->prepare('INSERT INTO users(username,mail,password) VALUES (:username, :mail, :password)');

	$nom=htmlspecialchars($_POST['username']);
	$mail=htmlspecialchars($_POST['mail']);
	$password=htmlspecialchars($_POST['pass']);
	$confirmpass=htmlspecialchars($_POST['confirmpass']);

	if ($password == $confirmpass)
	{
		$req-> execute(array(
		'username'=> $nom,
		'mail'=> $mail,
		'password'=> $password
		));
	}

	header('Location: index.php?action=Authentification');


	?>
