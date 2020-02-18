<?php
class TradSc{
  public function tradSc_page(){ ?>
  <!DOCTYPE html>
   <html lang="fr-FR" xmlns:fb="http://ogp.me/ns/fb#">

   <script type="text/javascript"></script>

   <head>

  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=yes,width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="pingback" href="../Controler/Rooter.php">

    <title>Compatible Electronique Translation</title>
    <meta name="description" content="Compatible Electronique Translation sert à traduire des textes publiés des clients par des traducteurs profitionnels.">

    <link rel="icon" type="image/png" href="../View/Images/logo2.png" sizes="96x96">

    <link rel="apple-touch-icon" sizes="180x180" href="../View/Images/logo2.png">

  <link rel="stylesheet" type="text/css" href="../View/StyleHeader.css"/>
    <link rel="stylesheet" type="text/css" href="../View/StyleTraduction.css"/>
    <style type="text/css">
      div.trad{
        width: 50%;
        margin-left: 500px;
      }
      img.trIcon{
        margin-left: 250px;
        height: 300px;
        width: 300px;
      }
      div.ecran{
        position: relative;
      }
      p{
        font-size: 24px;
      }
      
    </style>
    
 </head>
 
 <body >
<header class="cd-auto-hide-header">

    <div class="logo">
    <a href="Rooter.php">
       <img src="../View/Images/logo4.svg" alt="Logo" class="lazyloading" data-was-processed="true">
  </a>
</div>

<div class="reseaux">
  <a href="www.facebook.com"><img class="resSoc" src="../View/Images/facebook2.png" /></a>
  <a href="www.instagram.com"><img class="resSoc" src="../View/Images/instagram2.png"/></a>
  <a href="www.twitter.com"><img class="resSoc" src="../View/Images/whatsapp2.png"/></a>
  <a href="www.gmail.com"><img class="resSoc" src="../View/Images/gmail2.png"/></a>
  <a href="www.youtube.com"><img class="resSoc" src="../View/Images/youtube2.png"/></a>
</div>

<nav class="cd-secondary-nav">
    <ul>
      <li><a class="c-accueil" href="../Controler/Rooter.php">Accueil</a></li>
      <li><a class="c-traduction" href="../View/Traduction.php">Types de Traduction</a></li>
      <li><a class="c-traducteur" href="../View/Traducteur.php"> Traducteurs</a></li>
      <li><a class="c-blog" href="../View/Blog.php">Blog</a></li>
      <li><a class="c-recrutement" href="../Controler/RooterRecrutement.php">Recrutement</a></li>
      <li><a class="c-apropos" href="../View/APropos.php">A propos</a></li>
      
    </ul>
  </nav>

</header>
<div class="ecran" style="background-color: #e3f2fd!important;margin-top: 160px;">
<?php

                    try{
                        $ct=new TraducteurControler();
                        $qtm=$ct->getTradScControler();
                        foreach ($qtm as $rowm) {
                            ?>
                      <div class="trad" style="background-color: white; color: black;">   
                     <img class="trIcon" src="../View/Images/trad2.png" > 
                    <div class="span3" >
                      <h2 style="font-weight: bold; font-size:40px;color:black;text-align: center;"><?php echo $rowm["nom"];?> <?php echo $rowm["prenom"];?></h2>
                     </div> 
                    
                   <div class="infos">
                    <p style="font-weight: bold;"> Email: </p><p> <?php echo $rowm["email"];?></p>
                  </div>
                   <div class="infos">
                    <p style="font-weight: bold;"> Wilaya: </p><p> <?php echo $rowm["wilaya"];?></p>
                  </div>
                   <div class="infos">
                    <p style="font-weight: bold;"> Commune: </p><p> <?php echo $rowm["commune"];?></p>
                  </div>
                   <div class="infos">
                    <p style="font-weight: bold;"> Adresse: </p><p> <?php echo $rowm["adresse"];?></p>
                  </div>
                   <div class="infos">
                    <p style="font-weight: bold;"> Téléphone: </p><p> <?php echo $rowm["telephone"];?></p>
                  </div>
                   <div class="infos">
                    <p style="font-weight: bold;"> Fax: </p><p> <?php echo $rowm["fax"];?></p>
                  </div>
                   <div class="infos">
                    <p style="font-weight: bold;"> Langues métrisées: </p> <p> <?php echo $rowm["langue"];?></p>
                  </div>
                   <div class="infos">
                    <p style="font-weight: bold;"> Assermenté: </p><p> <?php echo $rowm["assermente"];?></p>
                  </div>
                   <div class="infos">
                    <p style="font-weight: bold;"> Note (/20): </p> <p><?php echo $rowm["note"];?></p>
                  </div>
                  
              </div>
               
            <?php
        }}
        catch(Exception $e){
            echo'erreur'.$e->getMessage();
        }
        ?>
</div>
 </body>
 </html>
 <?php
}}
?>