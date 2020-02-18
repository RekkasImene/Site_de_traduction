<?php
class accueil_model{
	private $dbname="siteTraduction";
	private $host="localhost";
	private $user="root";
	private $password="";

	private function connexion($dbname,$host,$user,$password){
		$dsn="mysql:dbname=$dbname; host=$host";
		try{
			$c=new PDO($dsn,$user,$password);
		}
		catch(PDOException $ex) {
			printf("erreur de la connexion à la base de donnée 'siteTraduction'",$ex->getMessage());
			exit();
		}
		return $c;
	}
	private function requete($c,$r){
		return $c-> query($r);
	}

	private function deconnexion (& $c){
		$c=null;
	}
	
	public function getArticle(){
		$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
		$qtf="select * from article";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;
	}
}?>
