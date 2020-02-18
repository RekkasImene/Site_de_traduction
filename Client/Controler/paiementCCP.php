<?php

require_once('../Model/DocumentsModel.php');

$mtf= new documents_model();
$r=$mtf->paiementCCP($_GET['ID']);