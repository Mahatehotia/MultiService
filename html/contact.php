<?php
require('../_includes/verification.php');
require ('../classes/function.php');
include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" action="sendMessage()" method="post">
                    <fieldset>
                        <legend class="text-center">Contactez nous</legend>

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

                        <!-- Message -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Votre message</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="message" name="message" placeholder="Écrire votre message" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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
