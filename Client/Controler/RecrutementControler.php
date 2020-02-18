<?php
require_once('../View/Recrutement.php');
require_once('../View/ProfilTraducteur.php');
require_once('../Model/RecrutementModel.php');
require_once('../Model/model.php');
require_once('../Model/TraducteurModel.php');
class RecrutementControler
{
	public function callRecrutement()
	{
		$acc=new Recrutement();
		$acc->recrutement_page();
	}
public function callProfil()
	{
		$acc=new Profil();
		$acc->profil_page();
			$acc->article();
	}
	  
    public function inscription_controler(){
        $mtf= new recrutement_model();
        $r=$mtf->inscrir();
        return $r;
    }
        public function getArticleControler()
	{
		$atf=new accueil_model();
		$a=$atf->getArticle();
		return $a;

	}
	 public function getNbrNotificationControler()
	{
		/*session_start();*/
		$atf=new traducteur_model();
		$a=$atf->getNbrNotification($_SESSION['email']);
		return $a;

	}

}
