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
  <input id="login" name="login" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mdp">Mot de passe</label>
  <div class="col-md-4">
    <input id="mdp" name="mdp" type="password" class="form-control input-md" required="">
    
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


<form class="form-horizontal" method="post" action="inscription.php">
<fieldset>

<!-- Form Name -->
<legend>Inscription</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mdp">Mot de passe</label>
  <div class="col-md-4">
    <input id="mdp" name="mdp" type="password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">Prénom</label>  
  <div class="col-md-4">
  <input id="prenom" name="prenom" type="text"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">Adresse mail</label>  
  <div class="col-md-4">
  <input id="mail" name="mail" type="email"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adresse">Adresse postale</label>  
  <div class="col-md-4">
  <input id="adresse" name="adresse" type="text"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cp">Code postal</label>  
  <div class="col-md-4">
  <input id="cp" name="cp" type="text" pattern="[0-9]{5}" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ville">Ville</label>  
  <div class="col-md-4">
  <input id="ville" name="ville" type="text"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnInscription"></label>
  <div class="col-md-4">
    <button id="btnInscription" name="btnInscription" class="btn btn-success">S'inscrire</button>
  </div>
</div>

</fieldset>
</form>








<?php
}

// L'utilisateur est déjà connecté
elseif (isset($_SESSION['utilisateur'])) {
	
	echo 'Bienvenue ' . var_dump($_SESSION['utilisateur']);
	include '_includes/menu.php';
}



?>

