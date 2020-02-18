<?php
require_once('../View/TradGe.php');
require_once('../View/TradSc.php');
require_once('../View/TradSw.php');
require_once('../View/DevisTrad.php');
require_once('../View/AffichageTraducteur.php');
require_once('../Model/TraducteurModel.php');
require_once('../Model/DocumentsModel.php');

class TraducteurControler
{
	public function callTradGe()
	{
		$acc=new TradGe();
		$acc->tradGe_page();
	}
	public function callTradSc()
	{
		$acc=new TradSc();
		$acc->tradSc_page();
	}
	public function callDevisTrad()
	{
		$acc=new DevisTrad();
		$acc->devisTrad_page();
	}
	public function callTradSw()
	{
		$acc=new TradSw();
		$acc->tradSw_page();
	}

	public function callAffichage()
	{
		$acc=new AffichageTraducteur();
		$acc->affichageTraducteur_page();
	}

    public function getTradGeControler()
	{
		$atf=new traducteur_model();
		$a=$atf->getTradGe();
		return $a;

	}
	    public function getTradScControler()
	{
		$atf=new traducteur_model();
		$a=$atf->getTradSc();
		return $a;

	}
	    public function getTradSwControler()
	{
		$atf=new traducteur_model();
		$a=$atf->getTradSw();
		return $a;

	}
		    public function getDevisTradControler()
	{
		$atf=new traducteur_model();
		$a=$atf->getTraducteur();
		return $a;

	}

	 public function modify_controler (){
        $mtf= new traducteur_model();
        $r=$mtf->modifyTraducteur();
        return $r;
    }
    		public function getTraducteurModifControler()
	{
		/*session_start();*/
		$atf=new traducteur_model();
		$a=$atf->getTraducteurModif($_SESSION['email']);
		return $a;

	}

	  public function getNbrNotificationControler()
	{
		/*session_start();*/
		$atf=new traducteur_model();
		$a=$atf->getNbrNotification($_SESSION['email']);
		return $a;

	}

		public function getDevisControler()
	{
		$atf=new documents_model();
		$a=$atf->getDevis();
		return $a;

	}

			public function getTraductionControler()
	{
		$atf=new documents_model();
		$a=$atf->getTraduction();
		return $a;

	}

			public function getDocumentsTermine()
	{
		$atf=new documents_model();
		$a=$atf->getDocumentsTermine();
		return $a;

	}


}
