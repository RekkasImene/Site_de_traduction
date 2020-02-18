<?php
require_once('../Model/TraducteurModel.php');

$mtf= new traducteur_model();
$r=$mtf->bloqueGestTrad($_GET['ID']);
