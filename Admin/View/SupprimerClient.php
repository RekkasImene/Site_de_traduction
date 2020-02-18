<?php
class SupprimerClient{
  public function supprimerClient_page(){ ?>
<?php include('../View/includes/header.php');?>
<?php include('../View/includes/navbar.php');?>
            <div id="layoutSidenav_content">
                <main>

                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des clients</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>Id</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th>Wilaya</th>
                                                <th>Commune</th>
                                                <th>Adresse</th>
                                                <th>N° Tél</th>
                                                <th>N° Fax</th>
                                                <th>Bloqué</th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>Id</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th>Wilaya</th>
                                                <th>Commune</th>
                                                <th>Adresse</th>
                                                <th>N° Tél</th>
                                                <th>N° Fax</th>
                                                <th>Bloqué</th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                     <?php

                                         try{
                                             $ct=new ClientControler();
                                              $qtm=$ct->getClientControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                <td><?php echo $rowm["id"];?></td>
                                                <td><?php echo $rowm["nom"];?></td>
                                                <td><?php echo $rowm["prenom"];?></td>
                                                <td><?php echo $rowm["email"];?></td>
                                                <td><?php echo $rowm["wilaya"];?></td>
                                                <td><?php echo $rowm["commune"];?></td>
                                                <td><?php echo $rowm["adresse"];?></td>
                                                <td><?php echo $rowm["telephone"];?></td>
                                                <td><?php echo $rowm["fax"];?></td>
                                                <td><?php echo $rowm["Bloque"];?></td>
                                                 <td><a class="btn btn-primary" href="deleteClientRooter.php?ID=<?php echo $rowm['id']; ?>">Supprimer </a></td>
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
}}
?>