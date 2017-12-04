<?php
include '../_includes/head.php';
require_once'../_includes/verification.php';
?>
<body>
<div class="container">
    <div class="background">
    <nav class="navbar navbar-light navBg">
        <div class="container-fluid">
            <div class="navbar-header">
                <a  href="/MultiService/html/accueil.php"><img src="/MultiService/_images/logo.png" alt="Logo"></a>
            
            </div>
            <ul class="nav navbar-nav navbar-right">
               <?php
               if(!isset($_SESSION['utilisateur'])){
                ?>
                    <li><a href="connexion.php"><i class="fa fa-sign-in" aria-hidden="true"></i></span> Connexion</a></li>
                <?php
               } else {
                ?>
                     <li><a href="../deconnexion.php"><i class="fa fa-sign-out" aria-hidden="true"></i></span> Déconnexion</a></li>
                <?php
               }
                ?>
            </ul>
        </div>
    </nav>
    <div class="espaceVide">
    </div>
    <nav class="navbar navbar-light navBg fixed">
        <div class="container-fluid">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/MultiService/html/accueil.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
                <li><a href="/MultiService/html/catalogue.php"><i class="fa fa-book" aria-hidden="true"></i> Catalogue</a></li>
                <li><a href="/MultiService/html/contact.php"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</a></li>
            </ul>
        </div>
    </nav>
</div>
</div>
