<?php
require_once('../View/Accueil.php');
require_once('../Model/model.php');

class AccueilControler
{
	public function callAccueil()
	{
		$acc=new Accueil();
		$acc->entete_page();
		$acc->article();
	}
	public function getArticleControler()
	{
		$atf=new accueil_model();
		$a=$atf->getArticle();
		return $a;

	}
}
?>