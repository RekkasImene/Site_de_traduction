<?php
class BloquerTrad{
  public function bloquerTrad_page(){ ?>
<?php include('../View/includes/header.php');?>
<?php include('../View/includes/navbar.php');?>
            <div id="layoutSidenav_content">
                <main>
 
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tableau des traducteurs</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th>Langues métrisées</th>
                                                <th>Type de tradution</th>
                                                <th>Assermenté</th>
                                                <th>Note</th>
                                                <th>Bloqué</th>
                                                <th>Bloquer</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th>Langues métrisées</th>
                                                <th>Type de tradution</th>
                                                <th>Assermenté</th>
                                                <th>Note</th>
                                                <th>Bloqué</th>
                                                <th>Bloquer</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                      <?php

                                         try{
                                             $ct=new TraducteurControler();
                                              $qtm=$ct->getTraducteurControler();
                                             foreach ($qtm as $rowm) {
                                            ?> 
                                            <tr>
                                                <td><?php echo $rowm["id"];?></td>
                                                <td><?php echo $rowm["nom"];?></td>
                                                <td><?php echo $rowm["prenom"];?></td>
                                                <td><?php echo $rowm["email"];?></td>
                                                <td><?php echo $rowm["langue"];?></td>
                                                <td><?php echo $rowm["type"];?></td>
                                                <td><?php echo $rowm["assermente"];?></td>
                                                <td><?php echo $rowm["note"];?></td>
                                                <td><?php echo $rowm["Bloque"];?></td>
                                                <td><a class="btn btn-primary" href="bloqueTradRooter.php?ID=<?php echo $rowm['id']; ?>">Bloquer </a></td>
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