<?php
require_once('../Model/DocumentsModel.php');

$mtf= new documents_model();
$r=$mtf->deleteDocuments($_GET['ID']);
