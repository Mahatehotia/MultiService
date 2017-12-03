<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=ams;charset=utf8', 'tafacesi', 'tafacesi');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
include 'header.php';
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table catalogue
$reponse = $bdd->query('SELECT * FROM catalogue');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-sm-5"></div>

        <div class="col-lg-2 col-sm-2">
            <strong>Votre catalogue</strong>
        </div>
        <div class="col-lg-5 col-sm-5"></div>
    </div>
</div>
    <div class="container">
    <div class="row">
<?php

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <div class="col-lg-4 col-md-4 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo $donnees['imageService']; ?>" alt="<?php echo $donnees['imageService']; ?>"></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#"><?php echo $donnees['nomService']; ?></a>
                </h4>
                <h5><?php echo $donnees['coutService']; ?> €</h5>
                <p class="card-text">Description: <?php echo $donnees['detailService']; ?></p>
            </div>
        </div>

    </div>
    <?php
}

?>
</div>
    </div>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête

?>