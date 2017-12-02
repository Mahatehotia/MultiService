<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 21/11/17
 * Time: 22:09
 */
require('../_includes/verification.php');
include 'header.php';
?>

<form class="form-horizontal" method="post" action="/MultiService/connexion.php">
    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-sm-6 col-md-4 control-label" for="login">Login</label>
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
<?php
include 'footer.php';
?>



