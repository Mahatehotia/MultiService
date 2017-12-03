<?php
require('../_includes/verification.php');
include 'header.php';
?><div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" action="" method="post">
                    <fieldset>
                        <legend class="text-center">Contactez nous</legend>
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
                                <button type="submit" name='envoimail' class="btn btn-primary btn-lg">Envoyer</button>
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

                                // Si il y a eu un clic sur le bouton "Envoyer"
                                
                                if(isset($_POST['envoimail'])) {                                
                                $nom     = trim($_POST['nom']);
                                $prenom     = trim($_POST['prenom']); // Récupération des informations contenues dans les champs
	                            $email   = trim($_POST['email']);
	                            $objet   = $_POST['objet'];
	                            $corps = $_POST['corps'];
                                
                                
                                $headers =  'MIME-Version: 1.0' . "\r\n"; 
                                $headers .= 'From: MultiServices <multiservices@gmail.com>' . "\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

                                if (($nom != '') && ($prenom != '') && ($email != '') && ($objet != '') && ($corps != '')) {

                                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    
                                    $message = "Content-Type: text/plain; charset=\"ISO-8859-1\""."\n";
                                    $message.= "Content-Transfer-Encoding: 8bit"."\n";
                                    
                                    if(@mail($email,$objet,$corps, $headers)){
                                    echo '<script>alert("Mail envoyé avec succès");</script>';
                                }else{
                                    echo '<script>alert("Le mail n\'a pas pu être envoyé");</script>';
                                }
                                } else {
                                    echo 'Cet email a un format non adapté.';
                                }
                                }
                                }
                                include 'footer.php';
                            
                                
               