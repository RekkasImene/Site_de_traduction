<?php

require_once('../View/Profil.php');
require_once('../Model/DevisModel.php');

class DevisControler
{
	
public function callProfil()
	{
		$acc=new Profil();
		$acc->profil_page();
	}
	  
    public function devis_controler(){
        $mtf= new devis_model();
        $r=$mtf->demander_devis();
        return $r;
    }


}
