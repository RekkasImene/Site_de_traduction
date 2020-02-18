<?php
class NotifTrad{
  public function notifTrad_page(){ 
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
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau pour confirmer ou refuser les documents</div>
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
                                                <th>Confirmer la demande</th>
                                                <th>Refuser la demande</th>
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
                                                <th>Confirmer la demande</th>
                                                <th>Refuser la demande</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new DocumentsControler();
                                              $qtm=$ct->getDocumentsControler();
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

                                                 <td><a class="btn btn-primary" href="confirmerdemande.php?ID=<?php echo $rowm['id']; ?>">Confirmer </a></td>
                                                 <td><a class="btn btn-primary" href="refuserdemande.php?ID=<?php echo $rowm['id']; ?>">Refuser </a></td>
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
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau pour verifier le paiement et déposer le document traduit</div>
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
                                                <th>Prix de la traduction</th>
                                                <th>Preuve de paiement</th>
                                                <th>Déposer le document traduit</th>
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
                                                <th>Prix de la traduction</th>
                                                <th>Preuve de paiement</th>
                                                <th>Déposer le document traduit</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new DocumentsControler();
                                              $qtm=$ct->getDocumentsPaieControler();
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
                                                <td><a href="../../Documents/<?php echo $rowm["ccp"];?>"><?php echo $rowm["ccp"];?></a></td>

                                                <td><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" href="">Dépose </a></td>
                                                <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="POST" action="devisTrad.php?ID=<?php echo $rowm['id']; ?>" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Document traduit </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label> Document traduit à joindre en format ".pdf" : </label>
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
                        
                       
                </main>
             <!-- <?php include('../View/includes/footer.php');?> -->
            </div>
            
             </div>
              <?php include('../View/includes/scripts.php');?>
 </body>
 </html>
 <?php
}}?>