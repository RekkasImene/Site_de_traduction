<?php

class login_model{
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
	
    public function  verifier(){
     $nom=$_POST['nom'];
        $mdp=$_POST['mdp'];
     if(isset($_POST['singin']))
     {
      if (empty($nom) || empty($mdp))
      {
        header("location:../Rooter/LoginRooter.php?Empty= Veuillez remplir les champs vides");
      }
      else
      {
 $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');

    
session_start();


    $user="select * from admin where nom='$nom' && mdp='$mdp'  ";
        $r=$this->requete($c,$user);

      
        if(mysqli_num_rows($r)==1){
         
          $_SESSION['nomAdmin']=$nom;
          header("location:../Rooter/AccueilRooter.php");

        }else{
          header("location:../Rooter/LoginRooter.php?Erreur= Nom ou Mot de passe d'administrateur incorrect!");
           
        }
      
      }

     }
       
        $this->deconnexion($c);


      
       
    
    }
 

  
   
}
?>