<?php 

 ?>
<head>
           <link rel="stylesheet" href="css/menu.css" >

    
<script type="text/javascript">

window.onload=function(){
$('.dropdown').click(function(){
$(this).siblings(".sousmenu").toggleClass('hide');
});
}


</script>
   
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-4 sidebar3">

                 <div class="name">
                    <p><?php //echo $_SESSION['utilisateur']->getNom() . " " . $_SESSION['utilisateur']->getPrenom();  ?></p>
                    <p><?php //echo $_SESSION['utilisateur']->getRole(); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4 sidebar3">
                <div class="left-navigation">
                    <ul>
                        
                        <?php 
                        if($_SESSION['utilisateur']->getRole() == "0")
                        {
                        
                            echo '<li>Vous n\'êtes qu\'un utilisateur lambda</li>';
                                                    
                        }
                        

                        
                        if($_SESSION['utilisateur']->getRole() == "1")
                        {
                           
                            echo '<li>Vous faites partis des administrateurs</li>';
                                                  
                        }
                        ?>
                        
                        
                      </ul>
                      
                        <ul class="category">
                        
                       


                      </ul>
                        <ul>
                        <li  onclick="document.location.href='deconnexion.php';" ><i class="fa fa-power-off" aria-hidden="true"></i>Se déconnecter</li>
                    </ul>
                </div>
            </div>
            