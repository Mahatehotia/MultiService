<?php
require('../_includes/verification.php');
include 'header.php';
?><div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" action="" method="post">
                    <fieldset>
                        <legend class="text-center">Nous Contacter</legend>

                        <!-- Nom input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="nom">Nom</label>
                            <div class="col-md-9">
                                <input id="nom" name="nom" type="text" placeholder="Votre nom" required>
                            </div>
                        </div>
                        <!-- Prénom input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="prenom">Prénom</label>
                            <div class="col-md-9">
                                <input id="prenom" name="prenom" type="text" placeholder="Votre prénom" required>
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Votre Email</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="text" placeholder="Votre mail" required>
                            </div>
                        </div>

                        <!-- Objet input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="objet">Objet</label>
                            <div class="col-md-9">
                                <input id="objet" name="objet" type="text" placeholder="Votre objet" required>
                            </div>
                        </div>

                        <!-- Corps -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Corps</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="message" name="corps" placeholder="Rédigez ici le corps de l'email" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" name='envoiMessage' class="btn btn-primary btn-lg">Envoyer</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
<?php
try
{
	// On se connecte à MySQL
    $mysqli = new mysqli("localhost", "tafacesi", "tafacesi", "ams");

    /* Vérification de la connexion */
    if (mysqli_connect_errno()) {
        printf("Échec de la connexion : %s\n", mysqli_connect_error());
        exit();
};
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

                                // Si il y a eu un clic sur le bouton "Envoyer"
                                
                                if(isset($_POST['envoiMessage'])) {                                
                                $nom=mysqli_real_escape_string($mysqli, trim($_POST['nom']));
                                $prenom=mysqli_real_escape_string($mysqli, trim($_POST['prenom'])); // Récupération des informations contenues dans les champs
	                            $email=mysqli_real_escape_string($mysqli, trim($_POST['email']));
	                            $objet=mysqli_real_escape_string($mysqli, $_POST['objet']);
	                            $corps=mysqli_real_escape_string($mysqli, $_POST['corps']);
                                
                                
                                if(($nom != '') && ($prenom != '') && ($email != '') && ($objet != '') && ($corps != '')) {

                                    $resultatquery = $mysqli->query("INSERT INTO messages(nomExpediteur, prenomExpediteur, objetMessage, mailExpediteur, detailMessage) 
                                    VALUES ('$nom', '$prenom', '$objet', '$email', '$corps')");
                                    if($resultatquery){
                                        echo '<script>alert("Formulaire envoyé avec succès");</script>';
                                    }else{
                                        echo '<script>alert("Le formulaire n\'a pas pu être envoyé");</script>';
                                    }
                                }else {
                                    echo '<script>alert("Veuillez compléter tous les champs du formulaire");</script>';
                                }
                            }
                                include 'footer.php';
                            
                                
               