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
	
			public function getClient(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from user";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
		public function deleteClient($id){

         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        
        	  $reg=" delete from user where id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/SupprimerClientRooter.php?Succes= le client ".$id." a été supprimé! ");

       $this->deconnexion($c);
	}

 public function deleteGestClient($id){


         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        

            $reg=" delete from user where id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/GestClientRooter.php?Succes= le client ".$id." a été supprimé! ");
     
       $this->deconnexion($c);
       
  
  }
		public function bloqueClient($id){


         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        
        	  $reg=" UPDATE user SET Bloque='oui' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/BloquerClientRooter.php?Succes= le client ".$id." a été bloqué! ");

     
       $this->deconnexion($c);
	}
  public function getClientModif($id){
    
      $c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
    $qtf="select * from user where id='$id'";
    $a=$this->requete($c,$qtf);
    $this->deconnexion($c);
    return $a;

  }

  public function bloqueGestClient($id){



         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');


            $reg=" UPDATE user SET Bloque='oui' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/GestClientRooter.php?Succes= le client ".$id." a été bloqué! ");

       $this->deconnexion($c);
      
  }

  public function modifyClient(){


          $id=$_POST['id'];
          $assermente=$_POST['assermente'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $wilaya=$_POST['wilaya'];
        $commune=$_POST['commune'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
       $email=$_POST['email'];
        $mdp=$_POST['mdp'];

          $bloque=$_POST['bloque'];


if(isset($_POST['modifier']))
     {
      if (empty($bloque) ||empty($nom) || empty($prenom)||empty($wilaya)||empty($adresse) || empty($commune)||empty($email) || empty($mdp) ||empty($telephone) || empty($fax)) {

        header("location:../Rooter/ModifyClientRooter.php?Empty= Veuillez remplir tous les champs vides");
      }
      else{
       $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
       

             $reg=" UPDATE user SET Bloque='$bloque' ,nom='$nom' , prenom='$prenom',wilaya='$wilaya',adresse='$adresse',commune='$commune',email='$email',mdp='$mdp',telephone='$telephone',fax='$fax' WHERE id='$id'";

             mysqli_query($c,$reg);
             header("location:../Rooter/ModifierClientRooter.php?Succes= le client ".$id." a été modifié! ?ID=".$id."");

        
      
       $this->deconnexion($c);
      }
    }

}

public function modifyGestClient(){


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

          $bloque=$_POST['bloque'];

if(isset($_POST['modifier']))
     {
      if (empty($bloque)  ||empty($nom) || empty($prenom)||empty($wilaya)||empty($adresse) || empty($commune)||empty($email) || empty($mdp) || empty($telephone) || empty($fax)) {

        header("location:../Rooter/ModifyGestClientRooter.php?Empty= Veuillez remplir tous les champs vides");
      }
      else{
       $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
       

             $reg=" UPDATE user SET Bloque='$bloque',nom='$nom' , prenom='$prenom',wilaya='$wilaya',adresse='$adresse',commune='$commune',email='$email',mdp='$mdp',telephone='$telephone',fax='$fax' WHERE id='$id'";

             mysqli_query($c,$reg);
             header("location:../Rooter/GestClientRooter.php?Succes= le client ".$id." a été modifié!");

        
      
       $this->deconnexion($c);
      }
    }
    }
 
}?>
