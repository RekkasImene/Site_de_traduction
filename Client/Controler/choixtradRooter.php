<?php
require_once('../Model/DevisModel.php');

$mtf= new devis_model();
$r=$mtf->choisir_trad($_GET['Email']);
