<?php
class recrutement_model{
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
	/*$c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);*/
          
        if(isset($_POST['assermente'])){
          $assermente="oui";
        }else{
          $assermente="non";
        }
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


$targetDir = "../../Documents/";
$fil = basename($_FILES["fil"]["name"]);
$cv1 = basename($_FILES["cv1"]["name"]);
$cv2 = basename($_FILES["cv2"]["name"]);
$cv3 = basename($_FILES["cv3"]["name"]);
$targetFilePath = $targetDir . $fil;
$targetFilePath1 = $targetDir . $cv1;
$targetFilePath2 = $targetDir . $cv2;
$targetFilePath3 = $targetDir . $cv3;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$fileType1= pathinfo($targetFilePath1,PATHINFO_EXTENSION);
$fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
$fileType3 = pathinfo($targetFilePath3,PATHINFO_EXTENSION);
if(isset($_POST['signin']))
     {
      if (empty($email) || empty($mdp) || empty($nom) || empty($prenom) || empty($wilaya) || empty($commune)|| empty($adresse)|| empty($telephone)|| empty($langue) || empty($type) || empty($_FILES["cv1"]["name"])|| empty($_POST['mdpConf']) )
      {
        header("location:RooterRecrutement.php?Empty= Veuillez remplir les champs vides");
      }
      else
      {
         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
        $user="select * from recrutement where email='$email'   ";
        $r=$this->requete($c,$user);
 
        $num=mysqli_num_rows($r);
        if($num==1){
             header("location:RooterRecrutement.php?Empty1= Cette adresse mail est déja utilisée!");

        }else{
 if( move_uploaded_file($_FILES["cv1"]["tmp_name"], $targetFilePath1) ){
      $reg="insert into recrutement(nom,prenom,langue,type,wilaya,commune,adresse,telephone,fax,email,mdp,cv1,cv2,cv3,assermente,fil,note,Bloque) values ('$nom','$prenom','$langue','$type','$wilaya','$commune','$adresse','$telephone','$fax','$email','$mdp','$cv1','$cv2','$cv3','$assermente','$fil','0','non')";
session_start();
       mysqli_query($c,$reg);
       $_SESSION['email']=$email;
      header("location:RooterProfilTrad.php");

}
        }
      }
       $this->deconnexion($c);
       
    }
   
   
}
}
?>