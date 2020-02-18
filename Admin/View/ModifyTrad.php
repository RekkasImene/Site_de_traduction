<?php
class ModifyTrad{
  public function modifyTrad_page(){ ?>
<?php include('../View/includes/header.php');?>
<?php include('../View/includes/navbar.php');?>
            <div id="layoutSidenav_content">
                <main>
                     <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modification des information du traducteur</h3></div>
                                    <div class="card-body">
 <form method="POST" action="../Rooter/modifTradRooter.php">
                            
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
            <div class="form-group"><label class="small mb-1" >Langue : </label><select class="form-control py-4" data-placeholder="Choisir vos langues..." name="langue" class="chosen-select" multiple tabindex="4">

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
           <div class="form-group"><label class="small mb-1" >Type de traduction : </label>
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
 <div class="form-group"><label class="small mb-1" >Note : </label>
            <input class="form-control py-4" type="text" name="note"  placeholder="Note" value="<?php echo $rowm["note"];?>"></div>
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
                                                <th>Langues métrisées</th>
                                                <th>Type de tradution</th>
                                                <th>Assermenté</th>
                                                <th>Note</th>
                                                <th>Bloqué</th>
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