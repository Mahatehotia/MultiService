<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 02/12/17
 * Time: 09:25
 */
require_once'../_includes/verification.php';

if (!isset($_SESSION['utilisateur'])){
    echo "<script type='text/javascript'>document.location.replace('accueil.php');</script>";
} else {
    echo "<script type='text/javascript'>document.location.replace('../admin/accueil.php');</script>";
}
?>