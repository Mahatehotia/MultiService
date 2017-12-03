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
include 'header.php';
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table catalogue
$reponse = $bdd->query('SELECT * FROM catalogue');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-4"></div>

        <div class="col-lg-4 col-sm-4">
            <h1>Votre catalogue</h1>
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
            <img class="card-img-top" src="<?php echo $donnees[$i]['imageService']; ?>" alt="<?php echo $donnees[$i]['imageService']; ?>">
            <div class="card-body">
                <h4 class="card-title">
                    <?php echo $donnees[$i]['nomService']; ?>
                </h4>
                <h5><?php echo $donnees[$i]['coutService']; ?> €</h5>
                <p class="card-text">Description: <?php echo $donnees[$i]['detailService']; ?></p>
            </div>
            <form method="post" action="../classes/function.php">
                <button type="submit" class="btn btn-info" name="serviceToUpdate" value="<?php echo $donnees[$i]['idService']; ?>">
                    <i class="fa fa-cog" aria-hidden="true"></i> Modifier
                </button>
                <button type="submit" class="btn btn-danger" name="serviceToDelete" value="<?php echo $donnees[$i]['idService']; ?>">
                    <i class="fa fa-times" aria-hidden="true"></i> Supprimer
                </button>
            </form>
        </div>

    </div>
    <?php
}


?>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card h-100">
                <img src="http://via.placeholder.com/200x200"></a>
                <div class="card-body">
                    <h4 class="card-title">
                    </h4>
                </div>
                <form method="post" action="ajoutService.php">
                    <button type="submit" class="btn btn-success" name="serviceToAdd" value="">
                        <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                    </button>
                </form>
            </div>

        </div>
</div>
    </div>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête

?>