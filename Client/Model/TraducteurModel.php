<?php
class traducteur_model{
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
	
	public function getTradGe(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
		$qtf="select * from recrutement where type='General' && Bloque='non'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
		public function getTradSc(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
		$qtf="select * from recrutement where type='Scientifique' && Bloque='non'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
		public function getTradSw(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
		$qtf="select * from recrutement where type='Site web' && Bloque='non'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}

			public function getTraducteur(){
		session_start();
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
		/*$qtf="select * from recrutement where type='".$_SESSION['type']."' && assermente='".$_SESSION['assermente']."' && langue='".$_SESSION['source']."' && langue='".$_SESSION['origine']."' ";*/
		$qtf="select * from recrutement where type='".$_SESSION['type']."' && assermente='".$_SESSION['assermente']."' && langue='".$_SESSION['source']."' && Bloque='non'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}

	public function modifyTraducteur(){


          $id=$_POST['id'];
          $assermente=$_POST['assermente'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $langue=$_POST['langue'];
        $type=$_POST['type'];
        $wilaya=$_POST['wilaya'];
        $commune=$_POST['commune'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
       $email=$_POST['email'];
        $mdp=$_POST['mdp'];

  
if(isset($_POST['modifier']))
     {
      if (empty($assermente) ||empty($nom) || empty($prenom)||empty($wilaya)||empty($adresse) || empty($commune)||empty($email) || empty($mdp) || empty($type)||empty($langue) || empty($telephone) || empty($fax)) {

        header("location:AfficherTradRooter.php?Empty= Veuillez remplir tous les champs vides");
      }
      else{
       $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
       

             $reg=" UPDATE recrutement SET  assermente='$assermente' , nom='$nom' , prenom='$prenom',wilaya='$wilaya',adresse='$adresse',commune='$commune',email='$email',mdp='$mdp',type='$type',langue='$langue',telephone='$telephone',fax='$fax' WHERE id='$id'";

             mysqli_query($c,$reg);
             header("location:AfficherTradRooter.php?Succes= le traducteur ".$id." a été modifié! ?ID=".$id."");

        
      
       $this->deconnexion($c);
      }
    }

}

  public function getTraducteurModif($email){
    
      $c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
    $qtf="select * from recrutement where email='$email'";
    $a=$this->requete($c,$qtf);
    $this->deconnexion($c);
    return $a;

  }

  public function getNbrNotification($email){
    
    
      $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        $user1="select * from devis where emailTrad='$email' && etat='non effectue'  ";
        $r1=$this->requete($c,$user1);
        $num1=mysqli_num_rows($r1);
        $user2="select * from devis where emailTrad='$email' && etat='en cours' && ccp!='' && traduction='oui' && prix!='0'  ";
        $r2=$this->requete($c,$user2);
        $num2=mysqli_num_rows($r2);
        $_SESSION['notif']=$num1+$num2;
    $this->deconnexion($c);
    return $num1+$num2;

  }

}?>
