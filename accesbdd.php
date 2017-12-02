<?php 

try {
		$bdd = new PDO('mysql:host=localhost;dbname=ams;charset=utf8', 'tafacesi', 'tafacesi');
	}

catch (Exception $e) 
	{
		die('Erreur : ' . $e->getMessage());
	}
?>