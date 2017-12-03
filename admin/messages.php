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
$reponse = $bdd->query('SELECT * FROM messages');
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4"></div>

            <div class="col-lg-3 col-sm-3">
                <h1>Vos Messages</h1>
            </div>
            <div class="col-lg-4 col-sm-4"></div>
        </div>
    </div>
<?php
// On affiche chaque entrée une à une
$donnees = $reponse->fetchAll();
for ($i=0; $i<count($donnees);$i++){
//while ($donnees = $reponse->fetch())
//{
    ?>
    <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>
                <?php if ($donnees[$i]['typeMessage']==1){
                    echo 'Devis';
                }?>
                <?php if ($donnees[$i]['typeMessage']==2){
                    echo 'Recrutement';
                }?>
                <?php if ($donnees[$i]['typeMessage']==3){
                    echo 'Autre';
                }?>
            </h1>
        </div>
        <div class="panel-body">
            <strong>Nom:</strong> <?php echo $donnees[$i]['nomExpediteur']." ".$donnees[$i]['prenomExpediteur']; ?><br>
            <strong>Email: </strong> <?php echo $donnees[$i]['mailExpediteur']; ?>
            <p>
                <strong>Message: </strong><br>
                <?php echo $donnees[$i]['detailMessage']; ?>
            </p>
        </div>
        <div class="panel-footer">
            <button class="btn btn-primary" actio>
                <a href="mailto:<?php echo $donnees[$i]['mailExpediteur']; ?>" class="button">Répondre</a>
            </button>
            <button class="btn btn-danger" onclick="alert('<?php  supprimerMessage($donnees[$i]['idMessage']);?>')">
               Supprimer
            </button>
        </div>
    </div>
    </div>
    <?php
}

?>