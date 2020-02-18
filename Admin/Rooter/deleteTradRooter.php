<?php
require_once('../Model/TraducteurModel.php');

$mtf= new traducteur_model();
$r=$mtf->deleteTrad($_GET['ID']);
