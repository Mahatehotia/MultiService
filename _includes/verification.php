<?php 
require_once 'head.php'; //inclut les liens vers les bibliotheque
require_once '../classes/CUtilisateur.php';
// Si il ny a pas de session instancier on linstancie
if(!isset($_SESSION['utilisateur']))
{
  session_start();
}


//Si une session est en cours on affiche le menu + le code
else
{  
include_once ('menu.php');
}

?>