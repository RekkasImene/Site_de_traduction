<?php
require_once('../View/NotifTrad.php');
require_once('../View/NotifClient.php');
require_once('../Model/DocumentsModel.php');

class DocumentsControler
{
	public function callNotifTrad()
	{
		$acc=new  NotifTrad();
		$acc->notifTrad_page();
	}
public function callNotifClient()
	{
		$acc=new  NotifClient();
		$acc->notifClient_page();
	}

	public function getDocumentsControler()
	{
		$atf=new documents_model();
		$a=$atf->getDocuments();
		return $a;

	}
		public function getDocumentsPaieControler()
	{
		$atf=new documents_model();
		$a=$atf->getDocumentsPaie();
		return $a;

	}

		public function getDocumentRefuseControler()
	{
		$atf=new documents_model();
		$a=$atf->getDocumentRefuse();
		return $a;

	}
			public function getDocumentsAccepteControler()
	{
		$atf=new documents_model();
		$a=$atf->getDocumentsAccepte();
		return $a;

	}
				public function getDevisTermineControler()
	{
		$atf=new documents_model();
		$a=$atf->getDevisTermine();
		return $a;

	}

	public function getDocumentsPaieCControler()
	{
		$atf=new documents_model();
		$a=$atf->getDocumentsPaieC();
		return $a;

	}
		public function getTraductionTermineCControler()
	{
		$atf=new documents_model();
		$a=$atf->getTraductionTermineC();
		return $a;

	}

}



