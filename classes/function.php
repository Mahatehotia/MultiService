<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 03/12/17
 * Time: 01:59
 */

  if (isset($_POST['idToDelete'])) {
      try {
          $bdd = new PDO('mysql:host=localhost;dbname=ams;charset=utf8', 'tafacesi', 'tafacesi');


          // sql to delete a record
          $sql = "DELETE FROM messages WHERE idMessage=".$_POST['idToDelete'];

          // use exec() because no results are returned
          $bdd->exec($sql);
          echo "<script type='text/javascript'>document.location.replace('../admin/messages.php');</script>";
      } catch (PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
      }
  }

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

function supprimerMessageSql($id){
$servername = "localhost";
$username = "tafacesi";
$password = "tafacesi";
$dbname = "ams";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM messages WHERE idMessage=".$id;

if (mysqli_query($conn, $sql)) {
    echo "admin/messages.php";
} else {
    echo "Erreur message non supprimé " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>