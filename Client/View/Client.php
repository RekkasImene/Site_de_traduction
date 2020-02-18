<?php
class Client{
  public function client_page(){ 
session_start();
try{

   $ct=new ClientControler();
                        $qtm=$ct->getNbrNotificationControler();

}
        catch(Exception $e){
            echo'erreur'.$e->getMessage();
        }
    ?>
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

   <link href="../View/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>


     <script src="../JS/jquery-3.3.1.min.js" >  </script>
<style type="text/css">
.container{
    width:100%;
top:50px;
min-width: 1500px;
  position: absolute;
}
 .droite {
  border-radius: 10px;
  padding:5px;
  position: relative;
  float: right;
  width:50%;
  min-width: 500px;
top: 100px;
  

}
 .gauche {
  border-radius: 10px;
  padding: 5px;
   min-width: 500px;
  position: relative;
  float: left;
  width:50%;
top: 100px;
  
}

.card{
  width:95%!important;
  min-width: 700px!important;
}

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
      <li><a class="c-accueil" href="../Controler/RooterProfil.php">Accueil</a></li>
      <li><a class="c-traduction" href="../View/Traduction.php">Types de Traduction</a></li>
      <li><a class="c-traducteur" href="../View/Traducteur.php"> Traducteurs</a></li>
      <li><a class="c-blog" href="../View/Blog.php">Blog</a></li>
      <li><a class="c-recrutement" href="../Controler/RooterRecrutement.php">Recrutement</a></li>
      <li><a class="c-apropos" href="../View/APropos.php">A propos</a></li>
      <li><a href="NotifClientRooter.php" class="notification">
  <span style="color: white!important;">Notification</span>

  <span class="badge"> <?php echo $_SESSION['notif'];?></span>
</a>
</li>
      
    </ul>
  </nav>

</header>
 </br>
<div style="margin-top: 120px!important;" id="layoutSidenav_content">
                <main>
                     <div class="container">
                        <div class="container gauche">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modification des information du traducteur</h3></div>
                                    <div class="card-body">
 <form method="POST" action="modifClientRooter.php">
                            
                                        <?php

                                          try{
                                            $ct=new ClientControler();
                                            $qtm=$ct->getInfoControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
           <input type="hidden" name="id" value="<?php echo $rowm["id"];?>">
            <div class="form-group"><label class="small mb-1">Nom : </label><input class="form-control py-4" type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo $rowm["nom"];?>"></div>
            <br>
            <div class="form-group"><label class="small mb-1" >Prenom : </label><input class="form-control py-4" type="text" name="prenom" id="prenom" placeholder="Prénom" value="<?php echo $rowm["prenom"];?>"></div>
            <br>
            <div class="form-group"><label class="small mb-1" >Email : </label><input class="form-control py-4" type="text" name="email" id="email" placeholder="Email" value="<?php echo $rowm["email"];?>"></div>
            <br>
            <div class="form-group"><label class="small mb-1">Mot de passe : </label><input class="form-control py-4" type="password" name="mdp" id="mdp" placeholder="Mot de passe" value="<?php echo $rowm["mdp"];?>"></div>
            
          <br>
            <div class="form-group"><label class="small mb-1" >Wilaya : </label>
           <input class="form-control py-4" type="text" name="wilaya" id="wilaya" placeholder="wilaya" value="<?php echo $rowm["wilaya"];?>"></div>
           <br>
            <div class="form-group"><label class="small mb-1" >Commune : </label>
            <input class="form-control py-4" type="text" name="commune" id="commune" placeholder="Commune" value="<?php echo $rowm["commune"];?>" ></div>
            <br>
            <div class="form-group"><label class="small mb-1" >Adresse : </label>
             <input class="form-control py-4" type="text" name="adresse" id="adresse" placeholder="Adresse" value="<?php echo $rowm["adresse"];?>">
         </div>
             <br>
             <div class="form-group"><label class="small mb-1" >N° Tél : </label>
              <input class="form-control py-4" type="text" name="telephone" id="telephone" placeholder="Téléphone" value="<?php echo $rowm["telephone"];?>"></div>
              <br>
               <div class="form-group"><label class="small mb-1" >N° Fax : </label>
               <input class="form-control py-4" type="text" name="fax" id="fax" placeholder="Fax" value="<?php echo $rowm["fax"];?>"></div>
               <br>
         
 
          <br>
                                                    <?php
                                              }}
                                                catch(Exception $e){
                                                echo'erreur'.$e->getMessage();
                                               }
                                            ?>
                           
                                 <?php
        if(@$_GET['Empty']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Empty']; ?> </p>
    <?php
    }
    ?>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
     <input class="btn btn-primary btn-block" type="submit" name="modifier" value="Modifier"></div>
                        </form>
                        </div>
                        </div>
                            </div>
                        </div>

 <div class="container droite">
                           

                   <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Historique des Traduction effectue </h3></div>
                                    <div class="card-body">

                                      <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des documents traduits</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>Id</th>
                                               <th>Document</th>
                                                <th>Date de soumission</th>
                                                <th>Type de document</th>
                                                <th>Traducteur choisis</th>
                                                <th>Email de traducteur</th>
                                                <th>N° Tél de client</th>
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Prix de traduction</th>
                                                <th>Document traduit</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                               <th>Document</th>
                                                <th>Date de soumission</th>
                                                <th>Type de document</th>
                                                <th>Traducteur choisis</th>
                                                <th>Email de traducteur</th>
                                                <th>N° Tél de client</th>
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Prix de traduction</th>
                                                <th>Document traduit</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new ClientControler();
                                              $qtm=$ct->getDocumentsTermine();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nomTrad"];?> <?php echo $rowm["prenomTrad"];?></td>
                                                <td><a href=""><?php echo $rowm["emailTrad"];?></a></td> 
                                                <td><?php echo $rowm["telephone"];?></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>
                                                <td><?php echo $rowm["etat"];?></td>
                                                <td><?php echo $rowm["prix"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["documentTraduit"];?>"><?php echo $rowm["documentTraduit"];?></a></td>

                                                 
                                               </tr>  
                                            <?php
                                              }}
                                                catch(Exception $e){
                                                echo'erreur'.$e->getMessage();
                                               }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                     
 

</div></div></div>
                  

                </main>
              </div>
          </body>
             <?php include('../View/includes/scripts.php');?>
          </html>
<?php
}
}
?>