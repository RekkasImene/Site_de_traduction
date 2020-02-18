<?php

class connexion_model{
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
	
	
public function  inscrir(){

        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $wilaya=$_POST['wilaya'];
        $commune=$_POST['commune'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
       $email=$_POST['email'];
        $mdp=$_POST['mdp'];
if(isset($_POST['signin']))
     {
      if (empty($email) || empty($mdp) || empty($nom) || empty($prenom) || empty($wilaya) || empty($commune)|| empty($adresse)|| empty($telephone)  )
      {
        header("location:RooterInscription.php?Empty= Veuillez remplir les champs vides");
      }
      else
      {
 $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');

    
session_start();


    $user="select * from user where email='$email'";
        $r=$this->requete($c,$user);

      
        if(mysqli_num_rows($r)==1){
          header("location:RooterInscription.php?Empty1= Cette adresse mail est déja utilisée!");
        }else{
           $_SESSION['email']=$email;
          $reg="insert into user(nom,prenom,wilaya,commune,adresse,telephone,fax,email,mdp,Bloque) values ('$nom','$prenom','$wilaya','$commune','$adresse','$telephone','$fax','$email','$mdp','non')";
       mysqli_query($c,$reg);
           header("location:RooterProfil.php");
           
        }
      
      }

     }
      
       $this->deconnexion($c);
       
    }
    public function  verifier(){
     /* $c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);*/
     $email=$_POST['email'];
        $mdp=$_POST['mdp'];
     if(isset($_POST['signup']))
     {
      if (empty($email) || empty($mdp))
      {
        header("location:RooterConnexion.php?Empty= Veuillez remplir les champs vides");
      }
      else
      {
 $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');

    
session_start();


    $user="select * from user where email='$email' && mdp='$mdp' && Bloque='non' ";
        $r=$this->requete($c,$user);

      
        if(mysqli_num_rows($r)==1){
          $_SESSION['email']=$email;
          header("location:RooterProfil.php");
            /*echo "user name find";*/
            /*require_once('RooterProfil.php');*/
        }else{
          echo "<script>alert('Email ou Mot de passe incorrect! ou bien vous êtes bloqué par l admin!')</script>";
          echo "<script>location.href='RooterConnexion.php'</script>";
           
        }
      
      }

     }
       
        $this->deconnexion($c);


      
       
    
    }
 public function  verifier_Trad(){
     /* $c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);*/
     $email=$_POST['email'];
        $mdp=$_POST['mdp'];
     if(isset($_POST['signup']))
     {
      if (empty($email) || empty($mdp))
      {
        header("location:RooterConnexionTrad.php?Empty= Veuillez remplir les champs vides");
      }
      else
      {
 $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');

    
session_start();


    $user="select * from recrutement where email='$email' && mdp='$mdp' && Bloque='non' ";
        $r=$this->requete($c,$user);

      
        if(mysqli_num_rows($r)==1){
          $_SESSION['email']=$email;
          header("location:RooterProfilTrad.php");
            /*echo "user name find";*/
            /*require_once('RooterProfil.php');*/
        }else{
          echo "<script>alert('Email ou Mot de passe incorrect! ou bien vous êtes bloqué par l admin' )</script>";
          echo "<script>location.href='RooterConnexionTrad.php'</script>";
           
        }
      
      }

     }
       
        $this->deconnexion($c);


      
       
    
    }

  
   
}
?>