<?php
class NotifClient{
  public function notifClient_page(){ 
    session_start();?>
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

     <link href="../View/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

    
 </head>
 
 <body >

   <div id="layoutSidenav_content">
                <main>
 
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des documents qui ont été refusé d'être traduits</div>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Ne plus afficher cette notification</th>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Ne plus afficher cette notification</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new DocumentsControler();
                                              $qtm=$ct-> getDocumentRefuseControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nomTrad"];?> <?php echo $rowm["prenomTrad"];?></td>
                                                <td><a href=""><?php echo $rowm["emailTrad"];?></a></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>
                                                <td><?php echo $rowm["etat"];?></td>

                                                 <td><a class="btn btn-primary" href="ignorer.php?ID=<?php echo $rowm['id']; ?>">Ignorer </a></td>
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
                 
                 <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des traductions coffirmées par un traducteur mais pas encore effectuée</div>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                              
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new DocumentsControler();
                                              $qtm=$ct->getDocumentsAccepteControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                 <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nomTrad"];?> <?php echo $rowm["prenomTrad"];?></td>
                                                <td><a href=""><?php echo $rowm["emailTrad"];?></a></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>
                                                <td><?php echo $rowm["etat"];?></td>

                                                 
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
                 <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des devis de traductions effectués</div>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Document traduit</th>
                                                <th>Ne plus afficher cette notification</th>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Document traduit</th>
                                                <th>Ne plus afficher cette notification</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new DocumentsControler();
                                              $qtm=$ct->getDevisTermineControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                 <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nomTrad"];?> <?php echo $rowm["prenomTrad"];?></td>
                                                <td><a href=""><?php echo $rowm["emailTrad"];?></a></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>
                                                <td><?php echo $rowm["etat"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["documentTraduit"];?>"><?php echo $rowm["documentTraduit"];?></a></td>
                                                <td><a class="btn btn-primary" href="ignorer.php?ID=<?php echo $rowm['id']; ?>">Ignorer </a></td>
                                                 
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

                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des prix des traductions en cours </div>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Prix de traduction</th>
                                                <th>Accepter ce prix</th>
                                                <th>Refuser ce prix</th>

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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Prix de traduction</th>
                                                <th>Accepter ce prix</th>
                                                <th>Refuser ce prix</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new DocumentsControler();
                                              $qtm=$ct->getDocumentsPaieCControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                 <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nomTrad"];?> <?php echo $rowm["prenomTrad"];?></td>
                                                <td><a href=""><?php echo $rowm["emailTrad"];?></a></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>
                                                <td><?php echo $rowm["etat"];?></td>
                                                <td><?php echo $rowm["prix"];?></td>
                                                <td><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" href="">Accepter </a></td>
                                                <td><a class="btn btn-primary" href="refuserprix.php?ID=<?php echo $rowm['id']; ?>">Refuser </a></td>
                                                 <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="POST" action="paiementCCP.php?ID=<?php echo $rowm['id']; ?>" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Preuve de paiement par CCP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label> Preuve de paiement ccp à joindre sous format ".pdf ou .jpg" : </label>
        <br>
        <input type="file" name="ccp" size="40" id="fileElem" accept=".pdf,.jpg,.jpeg,.png" aria-required="true" aria-invalid="false" >
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


                  <?php
        if(@$_GET['Empty']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Empty']; ?> </p>
    <?php
    }
    ?>
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des traductions effectués</div>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Prix de traduction</th>
                                                <th>Document traduit</th>
                                                <th>Noter le traducteur</th>
                                                <th>Ne plus afficher cette notification</th>
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
                                                <th>Langue source</th>
                                                <th>Langue de traduction</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Etat de document</th>
                                                <th>Prix de traduction</th>
                                                <th>Document traduit</th>
                                                <th>Noter le traducteur</th>
                                                <th>Ne plus afficher cette notification</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new DocumentsControler();
                                              $qtm=$ct->getTraductionTermineCControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                 <td><?php echo $rowm["id"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["fil"];?>"><?php echo $rowm["fil"];?></a></td>
                                                <td><?php echo $rowm["date"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["nomTrad"];?> <?php echo $rowm["prenomTrad"];?></td>
                                                <td><a href=""><?php echo $rowm["emailTrad"];?></a></td> 
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["source"];?></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>
                                                <td><?php echo $rowm["etat"];?></td>
                                                <td><?php echo $rowm["prix"];?></td>
                                                <td><a href="../../Documents/<?php echo $rowm["documentTraduit"];?>"><?php echo $rowm["documentTraduit"];?></a></td>
                                                <td><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" href="">Noter </a></td>
                                                <td><a class="btn btn-primary" href="ignorer.php?ID=<?php echo $rowm['id']; ?>">Ignorer </a></td>
                                                                                                 <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="POST" action="noterTrad.php?Email=<?php echo $rowm['emailTrad']; ?>" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Note Traducteur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label> Notez le traducteur (/20): </label>
        <br>
        <input type="text" name="note" placeholder="Note sur 20 ">
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

                       
                </main>
             <!-- <?php include('../View/includes/footer.php');?> -->
            </div>
            
             </div>
              <?php include('../View/includes/scripts.php');?>
 </body>
 </html>
 <?php
}}?>