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
	
	public function getTraducteur(){
		
			$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
	
		$qtf="select * from recrutement";
		$a=$this->requete($c,$qtf);
		$this->deconnexion($c);
		return $a;

	}
  public function getTraducteurModif($id){
    
      $c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
    $qtf="select * from recrutement where id='$id'";
    $a=$this->requete($c,$qtf);
    $this->deconnexion($c);
    return $a;

  }
	public function deleteTrad($id){

         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');

        	  $reg=" delete from recrutement where id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/SupprimerTradRooter.php?Succes= le traducteur ".$id." a été supprimé! ");

       $this->deconnexion($c);
       
	}

  public function deleteGestTrad($id){


         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        

            $reg=" delete from recrutement where id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/GestTradRooter.php?Succes= le traducteur ".$id." a été supprimé! ");
     
       $this->deconnexion($c);
       
  
  }

		public function bloqueTrad($id){


         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        

        	  $reg=" UPDATE recrutement SET Bloque='oui' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/BloquerTradRooter.php?Succes= le traducteur ".$id." a été bloqué! ");

       
       $this->deconnexion($c);
    
	}

public function bloqueGestTrad($id){



         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');


            $reg=" UPDATE recrutement SET Bloque='oui' WHERE id='$id'";

       mysqli_query($c,$reg);
             header("location:../Rooter/GestTradRooter.php?Succes= le traducteur ".$id." a été bloqué! ");

       $this->deconnexion($c);
      
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

          $bloque=$_POST['bloque'];

       $note=$_POST['note'];

if(isset($_POST['modifier']))
     {
      if (empty($bloque) || empty($assermente)||empty($note) ||empty($nom) || empty($prenom)||empty($wilaya)||empty($adresse) || empty($commune)||empty($email) || empty($mdp) || empty($type)||empty($langue) || empty($telephone) || empty($fax)) {

        header("location:../Rooter/ModifyTradRooter.php?Empty= Veuillez remplir tous les champs vides");
      }
      else{
       $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
       

             $reg=" UPDATE recrutement SET Bloque='$bloque' , assermente='$assermente' , note='$note',nom='$nom' , prenom='$prenom',wilaya='$wilaya',adresse='$adresse',commune='$commune',email='$email',mdp='$mdp',type='$type',langue='$langue',telephone='$telephone',fax='$fax' WHERE id='$id'";

             mysqli_query($c,$reg);
             header("location:../Rooter/ModifierTradRooter.php?Succes= le traducteur ".$id." a été modifié! ?ID=".$id."");

        
      
       $this->deconnexion($c);
      }
    }

}
public function modifyGestTraducteur(){


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

          $bloque=$_POST['bloque'];

       $note=$_POST['note'];

if(isset($_POST['modifier']))
     {
      if (empty($bloque) || empty($assermente)||empty($note) ||empty($nom) || empty($prenom)||empty($wilaya)||empty($adresse) || empty($commune)||empty($email) || empty($mdp) || empty($type)||empty($langue) || empty($telephone) || empty($fax)) {

        header("location:../Rooter/ModifyGestTradRooter.php?Empty= Veuillez remplir tous les champs vides");
      }
      else{
       $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
       

             $reg=" UPDATE recrutement SET Bloque='$bloque' , assermente='$assermente' , note='$note',nom='$nom' , prenom='$prenom',wilaya='$wilaya',adresse='$adresse',commune='$commune',email='$email',mdp='$mdp',type='$type',langue='$langue',telephone='$telephone',fax='$fax' WHERE id='$id'";

             mysqli_query($c,$reg);
             header("location:../Rooter/GestTradRooter.php?Succes= le traducteur ".$id." a été modifié!");

        
      
       $this->deconnexion($c);
      }
    }

}

}?>
