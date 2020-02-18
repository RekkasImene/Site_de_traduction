<?php
require_once('../View/GestDocs.php');
require_once('../Model/DocumentsModel.php');

class DocumentsControler
{
	public function callGestDocs()
	{
		$acc=new  GestDocs();
		$acc->gestDocs_page();
	}


	public function getDocumentsControler()
	{
		$atf=new documents_model();
		$a=$atf->getDocuments();
		return $a;

	}

}



