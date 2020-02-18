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
	
		$qtf="select * from devis where etat='non effectue' && emailTrad='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}

	public function getDocumentRefuse(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='refuse' && ignorerNotif='non' && email='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
			public function getDocumentsTermine(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='effectue' && emailTrad='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
				public function getDocumentsTermineC(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='effectue' && email='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}

				public function getTraductionTermineC(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='effectue' && traduction='oui' && ccp!='' && prix!='0' && ignorerNotif='non' && email='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}

				public function getDocumentsPaie(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='en cours' && ccp!='' && prix!='0' && traduction='oui' && emailTrad='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
					public function getDocumentsPaieC(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='en cours' && avisPrix='' && prix!='0' && traduction='oui' && email='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}

					public function getDocumentsAccepte(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='en cours'  && prix='0' && email='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}

	public function getDevisTermine(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='effectue' && ignorerNotif='non' && devis='oui' && email='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}


	public function getDevis(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='en cours' && emailTrad='".$_SESSION['email']."' && devis='oui'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
	public function getTraduction(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from devis where etat='en cours' && prix='0' && emailTrad='".$_SESSION['email']."' && traduction='oui'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}


		public function confirmerDemande($id){


          $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        

        	  $reg=" UPDATE devis SET etat='en cours' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:NotifTradRooter.php?Succes= La demande ".$id." a été confirmé! ");

       
       $this->deconnexion($c);

	}
	public function refuserDemande($id){


          $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        

        	  $reg=" UPDATE devis SET etat='refuse' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:NotifTradRooter.php?Succes= La demande ".$id." a été refuse! ");

       
       $this->deconnexion($c);

	}
		public function devisTraduit($id){

   $fil=$_POST['devisTrad'];

   $targetDir = "../../Documents/";
$fil = basename($_FILES["devisTrad"]["name"]);
$targetFilePath = $targetDir . $fil;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST['deposer']))
     {
      if ( empty($_FILES["devisTrad"]["name"]) )
      {
        header("location:AfficherTradRooter.php?Empty= Veuillez joindre le devis traduit!");
      }
      else{
          $c=mysqli_connect("localhost","root","");
     
        mysqli_select_db($c,'siteTraduction');
        
if(move_uploaded_file($_FILES["devisTrad"]["tmp_name"], $targetFilePath)){
        	  $reg=" UPDATE devis SET etat='effectue', documentTraduit='$fil' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:AfficherTradRooter.php?Succes= La devis traduit de devis ".$id." a été deposé! ");
}
       
       $this->deconnexion($c);
        }

	}
}

		public function prix($id){

   $prix=$_POST['prix'];
if(isset($_POST['envoyer']))
     {
      if ( empty($prix) )
      {
        header("location:AfficherTradRooter.php?Empty= Veuillez entrer le prix de traduction!");
      }
      else{
          $c=mysqli_connect("localhost","root","");
     
        mysqli_select_db($c,'siteTraduction');
        

        	  $reg=" UPDATE devis SET prix='$prix' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:AfficherTradRooter.php?Succes= Le prix de traduction ".$id." a été envoyé au client! ");

       
       $this->deconnexion($c);
        }

	}
}

	public function ignorerNotif($id){
		
			$c=mysqli_connect("localhost","root","");
     
        mysqli_select_db($c,'siteTraduction');
        

        	  $reg=" UPDATE devis SET ignorerNotif='oui' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:NotifClientRooter.php?Succes= Notification ignorée! ");

       
       $this->deconnexion($c);

	}

	public function refuserPrix($id){


          $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        

        	  $reg=" UPDATE devis SET avisPrix='refuse' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:NotifClientRooter.php?Succes= Le prix a été refuse! ");

       
       $this->deconnexion($c);

	}

	public function paiementCCP($id){


   $targetDir = "../../Documents/";
$ccp = basename($_FILES["ccp"]["name"]);
$targetFilePath = $targetDir . $ccp;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST['envoyer']))
     {
      if ( empty($_FILES["ccp"]["name"]) )
      {
        header("location:NotifClientRooter.php?Empty= Veuillez joindre la preuve de paiement!");
      }
      else{
          $c=mysqli_connect("localhost","root","");
     
        mysqli_select_db($c,'siteTraduction');
        
if(move_uploaded_file($_FILES["ccp"]["tmp_name"], $targetFilePath)){
        	  $reg=" UPDATE devis SET avisPrix='accepte', ccp='$ccp' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:NotifClientRooter.php?Succes= Prix accepté ! ");

       }
       $this->deconnexion($c);
        }

	}
}

	public function noterTrad($email){

   $note=$_POST['note'];
if(isset($_POST['envoyer']))
     {
      if ( empty($note) )
      {
        header("location:NotifClientRooter.php?Empty= Veuillez Remplir la note!");
      }
      else{
          $c=mysqli_connect("localhost","root","");
     
        mysqli_select_db($c,'siteTraduction');
        
        $user1="select note from recrutement where email='$email'";;
        $r1=$this->requete($c,$user1);

        (real)$moyNote=((real)$note+(real)$r1);
        	  $reg=" UPDATE recrutement SET note='$moyNote' WHERE email='$email'";

       mysqli_query($c,$reg);
             header("location:NotifClientRooter.php?Succes= Note traducteur modifie '".$moyNote."' ! ");

       
       $this->deconnexion($c);
        }

	}
}		
  
}?>
