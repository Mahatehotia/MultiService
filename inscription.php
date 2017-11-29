<?php 

require_once '_includes/verification.php';
require_once 'classes/CUtilisateur.php';
require_once 'accesbdd.php';

// Déclaration variables


$oUtilisateur = new CUtilisateur();
$oUtilisateur->objetSet(/*valeur a ajouter*/);
$oUtilisateur->inscrireUtilisateur($bdd,$oUtilisateur);


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Utilisateur ajouté !</title>
</head>
<body>

</body>
</html>
 <br><br>
 <h2>Vous allez être redirigé(e) dans 5 secondes</h2>

 <?php

 header("refresh:5; url=index.php");    
 ?>
