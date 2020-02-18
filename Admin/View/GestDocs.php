<?php
class GestDocs{
  public function gestDocs_page(){ ?>
<?php include('../View/includes/header.php');?>
<?php include('../View/includes/navbar.php');?>
            <div id="layoutSidenav_content">
                <main>
 
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des documents</div>
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
                                                <th>Traducteur qui l’a traité</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Document</th>
                                                <th>Date de soumission</th>
                                                <th>Type de document</th>
                                                <th>Client qui l’a soumis</th>
                                                <th>Traducteur qui l’a traité</th>
                                                <th>C'est un devis?</th>
                                                <th>C'est une traduction?</th>
                                                <th>Supprimer</th>
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
                                                <td><a href=""><?php echo $rowm["nom"];?> <?php echo $rowm["prenom"];?></a></td>
                                                <td><a href=""><?php echo $rowm["nomTrad"];?> <?php echo $rowm["prenomTrad"];?></a></td>
                                                <td><?php echo $rowm["devis"];?></td>
                                                <td><?php echo $rowm["traduction"];?></td>

                                                 <td><a class="btn btn-primary" href="deleteDocumentsRooter.php?ID=<?php echo $rowm['id']; ?>">Supprimer </a></td>
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
}}
?>