<?php
class documents_model{
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
	
			public function getDocuments(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
		public function deleteDocuments($id){


         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        

        	  $reg=" delete from devis where id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/GestDocsRooter.php?Succes= le document ".$id." a été supprimé! ");

       
       $this->deconnexion($c);
       

	}

		
  
}?>
