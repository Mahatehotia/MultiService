<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 03/12/17
 * Time: 01:59
 */
function supprimerMessage($id)
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=ams;charset=utf8', 'tafacesi', 'tafacesi');


        // sql to delete a record
        $sql = "DELETE FROM messages WHERE idMessage=".$id;

        // use exec() because no results are returned
        $bdd->exec($sql);
        echo "<script type='text/javascript'>document.location.replace('../admin/messages.php');</script>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function sendMessage(){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=ams;charset=utf8', 'tafacesi', 'tafacesi');
        // sql to delete a record
        $sql = "INSERT INTO messages VALUES ()";

        // use exec() because no results are returned
        $bdd->exec($sql);
        echo "<script type='text/javascript'>document.location.replace('../admin/messages.php');</script>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
?>