<?php

class ModifyGestClient{
  public function modifyGestClient_page(){ ?>
<?php include('../View/includes/header.php');?>
<?php include('../View/includes/navbar.php');?>
            <div id="layoutSidenav_content">
                <main>
                   <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modification des information du client</h3></div>
                                    <div class="card-body">
 <form method="POST" action="../Rooter/modifGestClientRooter.php">
                        
                                        <?php

                                          try{
                                             $ct=new ClientControler();
                                              $qtm=$ct->getClientModifControler();
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


          <div class="form-group"><label class="small mb-1" >Bloqué : </label> 
           <select class="form-control py-4" name="bloque" data-placeholder="Bloqué..." class="chosen-select" tabindex="2">
            <option value="<?php echo $rowm["Bloque"];?>"></option>
            <option value="oui">oui</option>
            <option value="non">non</option>
            
          </select></div>
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
                    </div>
                        <br><br>
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
                                                <th>Wilaya</th>
                                                <th>Commune</th>
                                                <th>Adresse</th>
                                                <th>N° Tél</th>
                                                <th>N° Fax</th>
                                                <th>Bloqué</th>
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