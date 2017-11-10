<?php
require('_includes/verification.php');


// Si il ny a pas de session instancier on linstancie
if(!isset($_SESSION['utilisateur']))
{
  echo 'pas de sesion donc formulaire de connexion apparait';

?>

<form class="form-horizontal" method="post" action="connexion.php">
<fieldset>

<!-- Form Name -->
<legend>Connexion</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mdp">Mot de passe</label>
  <div class="col-md-4">
    <input id="mdp" name="mdp" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnConnexion"></label>
  <div class="col-md-4">
    <button id="btnConnexion" name="btnConnexion" class="btn btn-success">Se connecter</button>
  </div>
</div>

</fieldset>
</form>


<?php
}

// L'utilisateur est déjà connecté
elseif (isset($_SESSION['utilisateur'])) {
	
	echo 'Bienvenu ' . var_dump($_SESSION['utilisateur']);
	include '_includes/menu.php';
}



?>

