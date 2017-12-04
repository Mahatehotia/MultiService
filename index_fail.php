<HTML>
    <HEAD>
        <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;url=html/connexion.php" />
<title>Erreur login</title>

<source src="_images/background.jpg" type="">
<script type="text/javascript">

function rebour(tps)
{
        //Car si il reste plus de 1 seconde il faut mettre un -s
        if (tps>1)
        {
                var heure = Math.floor(tps/3600);
                if(heure >= 24)
                {
                        var jour = Math.floor(heure/24);
                        var moins = 86400*jour;
                        var heure = heure-(24*jour);
                }
                else
                {
                        var jour = 0;
                        var moins = 0;
                }
                moins = moins+3600*heure;
                var minutes = Math.floor((tps-moins)/60);
                moins = moins + 60*minutes;
                var secondes = tps-moins;
                minutes = ((minutes < 10) ? "0" : "") + minutes;
                secondes = ((secondes < 10) ? "" : "") + secondes;
                document.getElementById("compteRebour_affiche").innerHTML = '  <p align="center"><br /><br /><br /><br /><font style="font-size:14pt;"><font color="#FF6600"><b>- Login ou mot de passe incorrect -</b></font><br /><br /><font style="font-size:11pt;"><font color="#000000"><b>- Redirection auto dans '+secondes + ' secondes -';
                var restant = tps-1;
                setTimeout("rebour("+restant+")", 1000);
        }

        //Pour 1 seconde ne pas mettre le s
        else { 
                var heure = Math.floor(tps/3600);
                if(heure >= 24)
                {
                        var jour = Math.floor(heure/24);
                        var moins = 86400*jour;
                        var heure = heure-(24*jour);
                }
                else
                {
                        var jour = 0;
                        var moins = 0;
                }
                moins = moins+3600*heure;
                var minutes = Math.floor((tps-moins)/60);
                moins = moins + 60*minutes;
                var secondes = tps-moins;
                minutes = ((minutes < 10) ? "0" : "") + minutes;
                secondes = ((secondes < 10) ? "" : "") + secondes;
                document.getElementById("compteRebour_affiche").innerHTML = '  <p align="center"><br /><br /><br /><br /><font style="font-size:14pt;"><font color="#FF6600"><b>- Login ou mot de passe incorrect -</b></font><br /><br /><font style="font-size:11pt;"><font color="#000000"><b>- Redirection auto dans '+secondes + ' seconde -';
                var restant = tps-1;
                setTimeout("rebour("+restant+")", 1000);

              }
       
}
</script>
</head>

<body>
<div id="compteRebour_affiche">
<!--Lance le compte à rebours sur 3 secondes-->
<script type="text/javascript">rebour(3);</script>
</div>
</body>
</html>
