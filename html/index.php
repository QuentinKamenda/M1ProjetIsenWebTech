<!DOCTYPE html>


<head>
    <title>Authentification</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="../css/LoginForm.css" />
	<link rel="stylesheet" href="../css/css-template.css"/>
</head>

<body>
	<?php

		$action = include('actionCheck.php');
		
		include_once('header.php');
		
		include($action.".php");

		include_once('footer.php');
	?>

</body>