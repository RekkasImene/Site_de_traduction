
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">MENU</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!--<input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>-->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Paramètres</a><a class="dropdown-item" href="#">Log Activité</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Rooter/LoginRooter.php">Deconnexion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="../Rooter/AccueilRooter.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Catégories</a
                            >


                            <div class="sb-sidenav-menu-heading">Gestion des traducteurs</div>
                                    <a class="nav-link" href="../Rooter/VisualiserTradRooter.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Visualiser les traducteurs</a
                            >
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Traitements sur les traducteurs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../Rooter/ModifierTradRooter.php">Modifier</a><a class="nav-link" href="../Rooter/SupprimerTradRooter.php">Supprimer</a>
                             <a class="nav-link" href="../Rooter/BloquerTradRooter.php">Bloquer</a>
                                </nav>
                            </div>

                            


                            <div class="sb-sidenav-menu-heading">Gestion des clients</div>
                            
                                    <a class="nav-link" href="../Rooter/VisualiserClientRooter.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Visualiser les clients</a
                            >
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Traitements sur les clients
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../Rooter/ModifierClientRooter.php">Modifier</a><a class="nav-link" href="../Rooter/SupprimerClientRooter.php">Supprimer</a>
                             <a class="nav-link" href="../Rooter/BloquerClientRooter.php">Bloquer</a>
                                </nav>
                            </div>



                            <div class="sb-sidenav-menu-heading">Gestion des documents</div>
                            <a class="nav-link" href="../Rooter/GestDocsRooter.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Visualiser et Supprimer des documents soumis</a
                            >



                             <div class="sb-sidenav-menu-heading">Statistiques</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Nombre de traduction
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../View/ChartsTraduction1.php">Faite entre 2 dates</a><a class="nav-link" href="layout-sidenav-light.html">Faite par un traducteur entre 2 dates</a>
                             <a class="nav-link" href="layout-sidenav-light.html">Faite par un client entre 2 dates</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Nombre de devis
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="layout-static.html">Faite entre 2 dates</a><a class="nav-link" href="layout-sidenav-light.html">Faite par un traducteur entre 2 dates</a>
                             <a class="nav-link" href="layout-sidenav-light.html">Faite par un client entre 2 dates</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Gestion du site à travers WordPress</div>
                            <a class="nav-link" href="../Rooter/WordPressRooter.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                WordPress</a>

                        </div>
                    </div>
                    
                </nav>
            </div>