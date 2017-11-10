<?php
require_once 'classes/CUtilisateur.php';
session_start();
try {
$connexion = new PDO ('mysql:host=localhost;dbname=ams','root','');
}
catch (PDOException $e) {
	echo 'Base de donnee hors service';
}
$requ = $connexion->query("SELECT * FROM utilisateurs WHERE loginUtilisateur =\"".$_POST["login"]."\" AND mdpUtilisateur=\"".$_POST["mdp"]."\";");




	
	if($res=$requ->fetch()){
		
		$res[]=$requ->fetch();
		
		$_SESSION['utilisateur'] = new CUtilisateur();
		$_SESSION['utilisateur']->connexion($res['idUtilisateur'],$res['nomUtilisateur'],$res['prenomUtilisateur'],$res['loginUtilisateur'],$res['mdpUtilisateur'],$res['adresseUtilisateur'],$res['emailUtilisateur'],$res['roleUtilisateur']);
		header('location:index.php');

	}
	else
	{
		
		
		// mauvais mdp puis on le redirige vers la page d'accueil
	    echo '<meta http-equiv="refresh" content="0;URL=index_fail.php">';
			
	}

?>