<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 02/12/17
 * Time: 18:17
 */
include 'header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Administration de AMS</h1>
            <p><h2><?php echo $_SESSION['utilisateur']->getNom() . " " . $_SESSION['utilisateur']->getPrenom(); ?>, vous allez pouvoir gérer ici vos messages et le catalogue de vos services.</h2></p>
            </p>
        </div>
    </div>
</div>
