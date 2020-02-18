<?php
class Accueil{
  public function accueil_page(){ ?>
<?php include('../View/includes/header.php');?>
<?php include('../View/includes/navbar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Catégories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Catégories</li>
                        </ol>
                        <div class="row">
                            <div class=" col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Gestion des traducteurs</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../Rooter/GestTradRooter.php">Voir détails</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Gestion des clients</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../Rooter/GestClientRooter.php">Voir détails</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Gestion des documents</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../Rooter/GestDocsRooter.php">Voir détails</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Statistiques</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../View/ChartsTraduction1.php">Voir détails</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <div class=" col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Gestion de site à travers WordPress</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Voir détails</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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