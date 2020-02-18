<?php
require_once('../View/Connexion.php');
require_once('../View/Inscription.php');
require_once('../View/Profil.php');
require_once('../View/ConnexionTrad.php');
require_once('../Model/ConnexionModel.php');
require_once('../Model/model.php');
require_once('../Model/ClientModel.php');
class ConnexionControler
{
	public function callConnexion()
	{
		$acc=new Connexion();
		$acc->connexion_page();
	}
	public function callConnexionTrad()
	{
		$acc=new ConnexionTrad();
		$acc->connexionTrad_page();
	}
public function callProfil()
	{
		$acc=new Profil();
		$acc->profil_page();
		$acc->article();
	}
public function callInscription()
	{
		$acc=new Inscription();
		$acc->inscription_page();
	}
	  
    public function verification_controler (){
        $mtf= new connexion_model();
        $r=$mtf->verifier();
        return $r;
    }
     public function verificationTrad_controler (){
        $mtf= new connexion_model();
        $r=$mtf->verifier_Trad();
        return $r;
    }
    public function inscription_controler (){
        $mtf= new connexion_model();
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
		$atf=new client_model();
		$a=$atf->getNbrNotification($_SESSION['email']);
		return $a;

	}

}
