<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 03/12/17
 * Time: 01:59
 */

if (isset($_POST['messageToDelete'])) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=ams;charset=utf8', 'tafacesi', 'tafacesi');


        // sql to delete a record
        $sql = "DELETE FROM messages WHERE idMessage=".$_POST['messageToDelete'];

        // use exec() because no results are returned
        $bdd->exec($sql);
        echo "<script type='text/javascript'>document.location.replace('../admin/messages.php');</script>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

if (isset($_POST['serviceToDelete'])) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=ams;charset=utf8', 'tafacesi', 'tafacesi');


        // sql to delete a record
        $sql = "DELETE FROM catalogue WHERE idService=".$_POST['serviceToDelete'];

        // use exec() because no results are returned
        $bdd->exec($sql);
        echo "<script type='text/javascript'>document.location.replace('../admin/catalogue.php');</script>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

if (isset($_POST['serviceToAdd'])) {
    $imageService = fopen($_FILES["imageService"]["tmp_name"], 'r');
    echo $imageService = fopen($_FILES["imageService"]["tmp_name"], 'r');
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

    $nomService=mysqli_real_escape_string($mysqli, trim($_POST['nomService']));
    $detailService=mysqli_real_escape_string($mysqli, trim($_POST['detailService']));
    $coutService=mysqli_real_escape_string($mysqli, trim($_POST['coutService']));
    $imageService=('http://via.placeholder.com/200x200');


    if(($nomService != '') && ($detailService != '') && ($coutService != '') && ($imageService != '') ) {

        $resultatquery = $mysqli->query("INSERT INTO catalogue(nomService, detailService, coutService, imageService) 
                                    VALUES ('$nomService', '$detailService', '$coutService', '$imageService')");
        if($resultatquery){
            echo '<script>alert("Service ajouté avec succès");</script>';
            echo "<script type='text/javascript'>document.location.replace('../admin/catalogue.php');</script>";
        }else{
            echo '<script>alert("Le service n\'a pas pu être envoyé");</script>';
            echo "<script type='text/javascript'>document.location.replace('../admin/catalogue.php');</script>";
        }
    }else {
        echo '<script>alert("Veuillez compléter tous les champs du formulaire");</script>';
        echo "<script type='text/javascript'>document.location.replace('../admin/ajoutService.php');</script>";
    }

}

?>