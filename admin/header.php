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
                <a  href="/MultiService/admin/accueil.php"><img class="logo" src="/MultiService/_images/logo.png" alt="Logo">AMS</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../deconnexion.php"><i class="fa fa-sign-out" aria-hidden="true"></i></span> Déconnexion</a></li>
            </ul>
        </div>
    </nav>
    <div class="espaceVide">
    </div>
    <nav class="navbar navbar-light navBg fixed">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/MultiService/admin/accueil.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
                <li><a href="/MultiService/admin/catalogue.php"><i class="fa fa-book" aria-hidden="true"></i> Catalogue</a></li>
                <li><a href="/MultiService/admin/messages.php"><i class="fa fa-envelope-o" aria-hidden="true"></i> Messages</a></li>
            </ul>
        </div>
    </nav>
</div>
</div>