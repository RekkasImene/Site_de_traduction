 <?php
class Profil{
  public function profil_page(){ 
    session_start();
try{

                        $ct=new RecrutementControler();
                        $qtm=$ct->getNbrNotificationControler();


}
        catch(Exception $e){
            echo'erreur'.$e->getMessage();
        }?>
		<!DOCTYPE html>
   <html lang="fr-FR" xmlns:fb="http://ogp.me/ns/fb#">

   <head>

  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=yes,width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="pingback" href="Rooter.php">

    <title>Compatible Electronique Translation</title>
    <meta name="description" content="Compatible Electronique Translation sert à traduire des textes publiés des clients par des traducteurs profitionnels.">

    <link rel="icon" type="image/png" href="../View/Images/logo2.png" sizes="96x96">

    <link rel="apple-touch-icon" sizes="180x180" href="../View/Images/logo2.png">

    <link rel="stylesheet" type="text/css" href="../View/StyleAccueil.css"/>
<link rel="stylesheet" href="../View/Select/chosen.css">
    <link rel="stylesheet" href="../View/Select/styleSelect.css">
     <script src="../JS/jquery-3.3.1.min.js" >  </script>

    <style type="text/css">


/*Notification*/
.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
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
      <li><a class="c-accueil" href="../Controler/RooterProfilTrad.php">Accueil</a></li>
      <li><a class="c-traduction" href="../View/Traduction.php">Types de Traduction</a></li>
      <li><a class="c-traducteur" href="../View/Traducteur.php"> Traducteurs</a></li>
      <li><a class="c-blog" href="../View/Blog.php">Blog</a></li>
      <li><a class="c-recrutement" href="../Controler/RooterRecrutement.php">Recrutement</a></li>
      <li><a class="c-apropos" href="../View/APropos.php">A propos</a></li>
      <li><a href="NotifTradRooter.php" class="notification">
  <span style="color: white!important;">Notification</span>

  <span class="badge"> <?php echo $_SESSION['notif'];?></span>
</a>
</li>
    </ul>
  </nav>

</header>
 </br>


<div id="APdiapo">
<div class="diapo">
<img  src="../View/Images/facebook.png"/>
<img  src="../View/Images/instagram.png"/>
<img  src="../View/Images/twitter.png" />
<img src="../View/Images/gmail.png" />
</div>
</div>

</br>

<section class="values">
<div class="wrapper_grid">
<?php 
}
public function article(){ ?>
    <div class="span6">
        <h2 style="font-weight: bold;">DES SOLUTIONS LOGICIELLES AVANCÉES POUR DES ENJEUX GLOBAUX</h2>
        <div style="display: inline-block;">
     
                     <?php
                    try{
                    	$cnt=0;
                        $ct=new RecrutementControler();
                        $qtm=$ct->getArticleControler();
                        foreach ($qtm as $rowm) {
                            ?>
                    <div class="span3">
                     <div class="img-values">  
                    <img src="<?php echo $rowm["image"]?>" alt="image">
                </div>
                    <h3 class="value<?php echo $cnt+1?>"><?php echo $rowm["name"];?></h3>
                <p><?php echo $rowm["description"];?></p>
                <details><p> <?php echo $rowm["detail"];?></p></details>
            </div>
            <?php
        $cnt=$cnt+1;
        }}
        catch(Exception $e){
            echo'erreur'.$e->getMessage();
        }
        ?>
          
        </div>
    </div>

    <div class="span6 staticform" data-select2-id="9">
      
       <h3 style="font-weight: bold;">Vous êtes un membre de CTE <br><span>Consultez votre profil ! </span></h3>
<br>
      <ul id="ident" class="member-ident">
            <li class="member member-register"><a class="awesome greenghost" href="AfficherTradRooter.php" >Afficher votre profil</a></li>

            <li class="member member-login"><a class="awesome green" href="../View/logout.php?logout">Deconnexion</a></li>
        </ul>
<br><br><br>
</div>

 <script src="../View/Select/chosen.jquery.js" type="text/javascript"></script>
<script src="../View/Select/init.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>

<?php
}
}
?>