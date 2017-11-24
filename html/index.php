<?php
session_start();
$action = include('actionCheck.php');
if(file_exists("model/".$action.".php")){
  include("model/" .$action.".php");
}
?>
<!DOCTYPE html>


<head>
    <title>Authentification</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="../css/LoginForm.css" />
	<link rel="stylesheet" href="../css/css-template.css"/>
	<link rel="stylesheet" type="text/css" href="../css/StylesProduit2.css"/>
	<link rel="stylesheet" type="text/css" href="../css/rechercher.css"/>
	<link rel="stylesheet" type="text/css" href="../css/welcome.css" />
    <link rel="stylesheet" type="text/css" href="../css/slide.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<?php


		include_once('header.php');

		include("view/" .$action.".php");

		include_once('footer.php');
	?>

</body>
