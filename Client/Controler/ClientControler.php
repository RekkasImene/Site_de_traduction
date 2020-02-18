<?php
require_once('../View/Client.php');

require_once('../Model/ClientModel.php');
require_once('../Model/DocumentsModel.php');

class ClientControler
{
	public function callClient()
	{
		$acc=new Client();
		$acc->client_page();
	}

    public function getInfoControler()
	{
		$atf=new client_model();
		$a=$atf->getInfo();
		return $a;

	}

		 public function modify_controler (){
        $mtf= new client_model();
        $r=$mtf->modifyClient();
        return $r;
    }
    public function getDocumentsTermine()
	{
		$atf=new documents_model();
		$a=$atf->getDocumentsTermineC();
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
