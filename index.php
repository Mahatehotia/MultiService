<?php
if (!isset($_SESSION['utilisateur'])){
    echo "<script type='text/javascript'>document.location.replace('html/accueil.php');</script>";
} else {
    echo "<script type='text/javascript'>document.location.replace('admin/accueil.php');</script>";
}
?>