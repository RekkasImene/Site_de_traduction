<?php
class client_model{
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
	
	public function getInfo(){
		
		if (isset($_SESSION['email'])) {
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
		$qtf="select * from user where email='".$_SESSION['email']."'";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;
		}
		else{
			 echo "<script>alert('client introuvable!')</script>";
		}
		
	}

	public function modifyClient(){


          $id=$_POST['id'];

        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
  
        $wilaya=$_POST['wilaya'];
        $commune=$_POST['commune'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
       $email=$_POST['email'];
        $mdp=$_POST['mdp'];


if(isset($_POST['modifier']))
     {
      if ( empty($nom) || empty($prenom)||empty($wilaya)||empty($adresse) || empty($commune)||empty($email) || empty($mdp) || empty($telephone) || empty($fax)) {

        header("location:AfficherTradRooter.php?Empty= Veuillez remplir tous les champs vides");
      }
      else{
       $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
       

             $reg=" UPDATE recrutement SET   nom='$nom' , prenom='$prenom',wilaya='$wilaya',adresse='$adresse',commune='$commune',email='$email',mdp='$mdp',telephone='$telephone',fax='$fax' WHERE id='$id'";

             mysqli_query($c,$reg);
             header("location:RooterClient.php?Succes= le client ".$id." a été modifié! ?ID=".$id."");

        
      
       $this->deconnexion($c);
      }
    }

}

public function getNbrNotification($email){

      $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        $user1="select * from devis where etat='refuse' && ignorerNotif='non' && email='$email'";;
        $r1=$this->requete($c,$user1);
        $num1=mysqli_num_rows($r1);
        $user2="select * from devis where etat='effectue' && traduction='oui' && ccp!='' && prix!='0' && ignorerNotif='non' && email='$email'";
        $r2=$this->requete($c,$user2);
        $num2=mysqli_num_rows($r2);
        $user3="select * from devis where etat='en cours' && avisPrix='' && prix!='0' && traduction='oui' && email='$email'";
        $r3=$this->requete($c,$user3);
        $num3=mysqli_num_rows($r3);
        $user4="select * from devis where etat='en cours'  && prix='0' && email='$email'";
        $r4=$this->requete($c,$user4);
        $num4=mysqli_num_rows($r4);
        $user5="select * from devis where etat='effectue' && ignorerNotif='non' && devis='oui' && email='$email'";
        $r5=$this->requete($c,$user5);
        $num5=mysqli_num_rows($r5);
        $_SESSION['notif']=$num1+$num2+$num3+$num4+$num5;
    $this->deconnexion($c);
    return $num1+$num2+$num3+$num4+$num5;

  }
}?>
