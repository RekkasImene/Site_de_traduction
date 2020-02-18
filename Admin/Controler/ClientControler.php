<?php
require_once('../View/VisualiserClient.php');
require_once('../View/SupprimerClient.php');
require_once('../View/BloquerClient.php');
require_once('../View/ModifierClient.php');
require_once('../View/ModifyClient.php');
require_once('../View/ModifyGestClient.php');
require_once('../View/GestClient.php');
require_once('../View/ProfileClient.php');
require_once('../Model/ClientModel.php');

class ClientControler
{
	public function callVisualiser()
	{
		$acc=new VisualiserClient();
		$acc->visualiserClient_page();
	}
		public function callSupprimer()
	{
		$acc=new SupprimerClient();
		$acc->supprimerClient_page();
	}

	public function callBloquer()
	{
		$acc=new BloquerClient;
		$acc->bloquerClient_page();
	}
	public function callModifier()
	{
		$acc=new ModifierClient;
		$acc->modifierClient_page();
	}

public function callModify()
	{
		$acc=new ModifyClient();
		$acc->modifyClient_page();
	}
	public function callGestClient()
	{
		$acc=new GestClient();
		$acc->gestClient_page();
	}
	public function callProfile()
	{
		$acc=new ProfileClient();
		$acc->profileClient_page();
	}
	public function callModifyGest()
	{
		$acc=new ModifyGestClient();
		$acc->modifyGestClient_page();
	}

	public function getClientControler()
	{
		$atf=new client_model();
		$a=$atf->getClient();
		return $a;

	}

			public function getClientModifControler()
	{
		$atf=new client_model();
		$a=$atf->getClientModif($_GET['ID']);
		return $a;

	}

}
