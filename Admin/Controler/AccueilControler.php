<?php
require_once('../View/Accueil.php');

class AccueilControler
{
	public function callAccueil()
	{
		$acc=new Accueil();
		$acc->accueil_page();
	}
	
}
?>