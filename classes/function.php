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

?>