<?php
require('../_includes/verification.php');
include 'header.php';
?>
<?php
require '../classes/function.php';

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
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table catalogue
$reponse = $bdd->query('SELECT * FROM catalogue');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-4"></div>

        <div class="col-lg-4 col-sm-4">
            <h1>Notre catalogue</h1>
        </div>
        <div class="col-lg-4 col-sm-4"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php

        // On affiche chaque entrée une à une
        $donnees = $reponse->fetchAll();
        for ($i=0; $i<count($donnees);$i++){
            ?>
            <div class="col-lg-4 col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php echo $donnees[$i]['imageService']; ?>" alt="<?php echo $donnees[$i]['nomService']; ?>">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $donnees[$i]['nomService']; ?>
                        </h4>
                        <h5><?php echo $donnees[$i]['coutService']; ?> €</h5>
                        <p class="card-text">Description: <?php echo $donnees[$i]['detailService']; ?></p>
                    </div>
                </div>

            </div>
            <?php
        }


        ?>
        </div>
    </div>
</div>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête

?>
<?php
include 'footer.php';
?>
