<?php

require_once('../Model/DocumentsModel.php');

$mtf= new documents_model();
$r=$mtf->noterTrad($_GET['Email']);