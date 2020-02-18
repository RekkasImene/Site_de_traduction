<?php

require_once('../Model/DocumentsModel.php');

$mtf= new documents_model();
$r=$mtf->refuserDemande($_GET['ID']);