<?php
	if (isset($_GET['action'])){
		return $_GET['action'];
	}
	else{
		return 'Register';
	}
?>