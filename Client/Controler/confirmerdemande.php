<?php

require_once('../Model/DocumentsModel.php');

$mtf= new documents_model();
$r=$mtf->confirmerDemande($_GET['ID']);