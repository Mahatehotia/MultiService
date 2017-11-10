<?php
require('_includes/verification.php');


// Si il ny a pas de session instancier on linstancie
if(!isset($_SESSION['utilisateur']))
{
  echo 'pas de sesion donc formulaire de connexion apparait';

?>

<form action="connexion.php" method="post">
	Login :<input type="text" name="login">
	Mot de passe : <input type="password" name="mdp">
	<button type="submit" name="connexion">Se connecter</button>
</form>

<?php
}

// L'utilisateur est déjà connecté
elseif (isset($_SESSION['utilisateur'])) {
	
	echo 'Bienvenu ' . var_dump($_SESSION['utilisateur']);
	include '_includes/menu.php';
}



?>