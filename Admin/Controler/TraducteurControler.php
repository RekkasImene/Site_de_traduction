<?php
require_once('../View/VisualiserTrad.php');
require_once('../View/SupprimerTrad.php');
require_once('../View/BloquerTrad.php');
require_once('../View/ModifierTrad.php');
require_once('../View/GestTrad.php');
require_once('../View/ModifyTrad.php');
require_once('../View/ModifyTrad.php');
require_once('../View/ModifyGestTrad.php');
require_once('../Model/TraducteurModel.php');

class TraducteurControler
{
	public function callVisualiser()
	{
		$acc=new VisualiserTrad();
		$acc->visualiserTrad_page();
	}

	public function callSupprimer()
	{
		$acc=new SupprimerTrad();
		$acc->supprimerTrad_page();
	}

	public function callBloquer()
	{
		$acc=new BloquerTrad();
		$acc->bloquerTrad_page();
	}
	public function callModifier()
	{
		$acc=new ModifierTrad();
		$acc->modifierTrad_page();
	}
		
public function callModify()
	{
		$acc=new ModifyTrad();
		$acc->modifyTrad_page();
	}
public function callGestTrad()
	{
		$acc=new GestTrad();
		$acc->gestTrad_page();
	}
	public function callModifyGest()
	{
		$acc=new ModifyGestTrad();
		$acc->modifyGestTrad_page();
	}

	public function getTraducteurControler()
	{
		$atf=new traducteur_model();
		$a=$atf->getTraducteur();
		return $a;

	}

		public function getTraducteurModifControler()
	{
		$atf=new traducteur_model();
		$a=$atf->getTraducteurModif($_GET['ID']);
		return $a;

	}

         	   public function modify_controler (){
        $mtf= new traducteur_model();
        $r=$mtf->modifyTraducteur();
        return $r;
    }

}



