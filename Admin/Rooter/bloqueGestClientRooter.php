<?php
require_once('../Model/ClientModel.php');

$mtf= new client_model();
$r=$mtf->bloqueGestClient($_GET['ID']);
