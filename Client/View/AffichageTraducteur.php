<?php
class AffichageTraducteur{
  public function affichageTraducteur_page(){ 
session_start();
try{

                        $ct=new TraducteurControler();
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
<div style="margin-top: 120px!important;" id="layoutSidenav_content">
                <main>
                     <div class="container">
                        <div class="container gauche">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modification des information du traducteur</h3></div>
                                    <div class="card-body">
 <form method="POST" action="modifTradRooter.php" >
                            
                                        <?php

                                          try{
                                             $ct=new TraducteurControler();
                                              $qtm=$ct->getTraducteurModifControler();
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
            <div class="form-group"><label class="small mb-1" >Langue : </label><select class="form-control py-4" data-placeholder="Choisir vos langues..." name="langue" class="chosen-select"  tabindex="4">

                                                                                            <option value="<?php echo $rowm["langue"];?>"></option>
                                                                                            <option value="Albanien">Albanien</option>
                                                                                            <option value="Allemand">Allemand</option>
                                                                                            <option value="Anglais">Anglais</option>
                                                                                            <option value="Arabe">Arabe</option>
                                                                                            <option value="Arménien">Arménien</option>
                                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                                            <option value="Bengali">Bengali</option>
                                                                                            <option value="Biélorusse">Biélorusse</option>
                                                                                            <option value="Bosnie">Bosnie</option>
                                                                                            <option value="Bulgare">Bulgare</option>
                                                                                            <option value="Catalan">Catalan</option>
                                                                                            <option value="Chinois">Chinois</option>
                                                                                            <option value="Cinghalais">Cinghalais</option>
                                                                                            <option value="Coréen">Coréen</option>
                                                                                            <option value="Croatien">Croatien</option>
                                                                                            <option value="Danois">Danois</option>
                                                                                            <option value="Espagnol">Espagnol</option>
                                                                                            <option value="Estonien">Estonien</option>
                                                                                            <option value="Finnois">Finnois</option>
                                                                                            <option value="Français">Français</option>
                                                                                            <option value="Géorgien">Géorgien</option>
                                                                                            <option value="Grec">Grec</option>
                                                                                            <option value="Grec pontique">Grec pontique</option>
                                                                                            <option value="Haïtien">Haïtien</option>
                                                                                            <option value="Hebreu">Hebreu</option>
                                                                                            <option value="Hongrois">Hongrois</option>
                                                                                            <option value="Indien">Indien</option>
                                                                                            <option value="Indonesien">Indonesien</option>
                                                                                            <option value="Islandais">Islandais</option>
                                                                                            <option value="Italien">Italien</option>
                                                                                            <option value="Japonais">Japonais</option>
                                                                                            <option value="Kazazakh">Kazazakh</option>
                                                                                            <option value="Khmer">Khmer</option>
                                                                                            <option value="Kirghize">Kirghize</option>
                                                                                            <option value="Kurde-Kurmanji">Kurde-Kurmanji</option>
                                                                                            <option value="Kurde-Sorani">Kurde-Sorani</option>
                                                                                            <option value="Latin">Latin</option>
                                                                                            <option value="Latvien">Latvien</option>
                                                                                            <option value="Lithuanien">Lithuanien</option>
                                                                                            <option value="Macédonien">Macédonien</option>
                                                                                            <option value="Malais">Malais</option>
                                                                                            <option value="Moldovan">Moldovan</option>
                                                                                            <option value="Mongol">Mongol</option>
                                                                                            <option value="Montenegrins">Monténégrins</option>
                                                                                            <option value="Neerlandais">Néerlandais</option>
                                                                                            <option value="Nepalais">Népalais</option>
                                                                                            <option value="Norvegien">Norvégien</option>
                                                                                            <option value="Oughour">Oughour</option>
                                                                                            <option value="Ouzbekistan">Ouzbékistan</option>
                                                                                            <option value="Pashtou">Pashtou</option>
                                                                                            <option value="Perse">Perse</option>
                                                                                            <option value="Philippen">Philippen</option>
                                                                                            <option value="Polonais">Polonais</option>
                                                                                            <option value="Portuguais">Portuguais</option>
                                                                                            <option value="Roumain">Roumain</option>
                                                                                            <option value="Russe">Russe</option>
                                                                                            <option value="Serbe">Serbe</option>
                                                                                            <option value="Slovakien">Slovakien</option>
                                                                                            <option value="Slovenien">Slovenien</option>
                                                                                            <option value="Suedois">Suédois</option>
                                                                                            <option value="Syriaque">Syriaque</option>
                                                                                            <option value="Tagalog">Tagalog</option>
                                                                                            <option value="TCHEQUE">TCHÉQUE</option>
                                                                                            <option value="Thailandais">Thailandais</option>
                                                                                            <option value="Tibetain">Tibétain</option>
                                                                                            <option value="Turc">Turc</option>
                                                                                            <option value="Turc Ottoman">Turc Ottoman</option>
                                                                                            <option value="Turkmain">Turkmain</option>
                                                                                         <option value="Ukranien">Ukranien</option>
                                                                                            <option value="Urdu">Urdu</option>
                                                                                            <option value="Vietnamien">Vietnamien</option>
                                                                                            <option value="Zaza">Zaza</option>
          </select>
      </div>
          <br>
           <div class="form-group"><label class="small mb-1" >Type de traduction: </label>
          <select class="form-control py-4" name="type" data-placeholder="Choisir votre type..." class="chosen-select" tabindex="2">
            <option value="<?php echo $rowm["type"];?>"></option>
            <option value="General">Généraliste</option>
            <option value="Scientifique">Scientifique</option>
            <option value="Site web">Des sites web</option>
          </select></div>
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
         <div class="form-group"><label class="small mb-1" >Assermenté : </label>
        <select class="form-control py-4" name="assermente" data-placeholder="Assermenté..." class="chosen-select" tabindex="2">
            <option value="<?php echo $rowm["assermente"];?>"></option>
            <option value="oui">oui</option>
            <option value="non">non</option>
            </select></div>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Actions sur les documents en cous de traitement</h3></div>
                                    <div class="card-body">


                                      <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau pour déposer le devis traduit </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>Id</th>
                                               <th>Document</th>
                                                <th>Date de soumission</th>
                                                <th>Type de document</th>
                                                <th>Client qui l’a soumis</th>
                                                <th>Email de client</th>
                                                <th>N° Tél de client</th>
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Déposer le devis traduit</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                               <th>Document</th>
                                                <th>Date de soumission</th>
                                                <th>Type de document</th>
                                                <th>Client qui l’a soumis</th>
                                                <th>Email de client</th>
                                                <th>N° Tél de client</th>
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Déposer le devis traduit</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new TraducteurControler();
                                              $qtm=$ct->getDevisControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nom"];?> <?php echo $rowm["prenom"];?></td>
                                                <td><a href=""><?php echo $rowm["email"];?></a></td> 
                                                <td><?php echo $rowm["telephone"];?></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>

                                                 <td><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" href="">Déposer </a></td>
                                                 <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="POST" action="devisTrad.php?ID=<?php echo $rowm['id']; ?>" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Document Traduit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label> Devis traduit à joindre en format ".pdf" : </label>
        <br>
        <input type="file" name="devisTrad" size="40" id="fileElem" accept=".pdf" aria-required="true" aria-invalid="false" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="deposer" value="Déposer" >
      </div>
    </form>
    </div>
  </div>
</div>                        
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
 <?php
        if(@$_GET['Empty']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Empty']; ?> </p>
    <?php
    }
    ?>

                 

<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau pour ajouter le prix des traductions en cours</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>Id</th>
                                               <th>Document</th>
                                                <th>Date de soumission</th>
                                                <th>Type de document</th>
                                                <th>Client qui l’a soumis</th>
                                                <th>Email de client</th>
                                                <th>N° Tél de client</th>
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Prix de traduction</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                               <th>Document</th>
                                                <th>Date de soumission</th>
                                                <th>Type de document</th>
                                                <th>Client qui l’a soumis</th>
                                                <th>Email de client</th>
                                                <th>N° Tél de client</th>
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Prix de traduction</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new TraducteurControler();
                                              $qtm=$ct->getTraductionControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nom"];?> <?php echo $rowm["prenom"];?></td>
                                                <td><a href=""><?php echo $rowm["email"];?></a></td> 
                                                <td><?php echo $rowm["telephone"];?></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>

                                                  <td><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1" href="">Entrer </a></td>

                                                  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="POST" action="prix.php?ID=<?php echo $rowm['id']; ?>">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Prix Traduction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label> Prix: </label>
        <br>
        <input type="text" name="prix" placeholder="Prix en entier ">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="envoyer" value="Envoyer" >
      </div>
    </form>
    </div>
  </div>
</div>             
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
                 
           



                                      </div>
                        </div>
                            </div>
                        </div>

 <div class="row" style="margin-top: 1200px;">
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
                                                <th>Client qui l’a soumis</th>
                                                <th>Email de client</th>
                                                <th>N° Tél de client</th>
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>prix</th>
                                                <th>Document traduit</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                               <th>Document</th>
                                                <th>Date de soumission</th>
                                                <th>Type de document</th>
                                                <th>Client qui l’a soumis</th>
                                                <th>Email de client</th>
                                                <th>N° Tél de client</th>
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>prix</th>
                                                <th>Document traduit</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new TraducteurControler();
                                              $qtm=$ct->getDocumentsTermine();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nom"];?> <?php echo $rowm["prenom"];?></td>
                                                <td><a href=""><?php echo $rowm["email"];?></a></td> 
                                                <td><?php echo $rowm["telephone"];?></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>
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


</div></div></div></div>
                    </div>
                  

                </main>
              </div>
          </body>
             <?php include('../View/includes/scripts.php');?>
          </html>
<?php
}
}
?>