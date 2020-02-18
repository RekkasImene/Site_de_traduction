<?php
require_once('../View/Login.php');
require_once('../Model/LoginModel.php');


class LoginControler
{
	public function callConnexion()
	{
		$acc=new Login();
		$acc->login_page();
	}

    public function verification_controler (){
        $mtf= new login_model();
        $r=$mtf->verifier();
        return $r;
    }
 
}
