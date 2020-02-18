<?php

class devis_model{
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
	
	
public function  demander_devis(){
 if(isset($_POST['assermente'])){
          $assermente="oui";
        }else{
          $assermente="non";
        }
$date=date("d-m-y");
         $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $langue=$_POST['langue'];
        $type=$_POST['type'];
        $demande=$_POST['demande'];
        $commentaire=$_POST['commentaire'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $source=$_POST['source'];
       $email=$_POST['email'];
$choix=$_POST['choix'];
$targetDir = "../../Documents/";
$fil = basename($_FILES["fil"]["name"]);
$targetFilePath = $targetDir . $fil;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST['devis']))
     {
      if (empty($email)  || empty($nom) || empty($prenom)  || empty($source)|| empty($adresse)|| empty($telephone)|| empty($langue) || empty($type) || empty($_FILES["fil"]["name"]) || empty($choix))
      {
        header("location:RooterProfil.php?Empty= Veuillez remplir les champs vides");
      }
      else
      {
         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');
         if(move_uploaded_file($_FILES["fil"]["tmp_name"], $targetFilePath)){
if ($choix=="devis"){
      $reg="insert into devis(date,nom,prenom,email,telephone,adresse,langue,source,type,commentaire,demande,assermente,fil,nomTrad,prenomTrad,emailTrad,devis,traduction,etat,prix,documentTraduit,avisPrix,ccp,ignorerNotif) values ('$date','$nom','$prenom','$email','$telephone','$adresse','$langue','$source','$type','$commentaire','$demande','$assermente','$fil','','','','oui','non','non effectue','0','','','','non')";

       mysqli_query($c,$reg);}
 if ($choix=="traduction"){ 
  $reg="insert into devis(date,nom,prenom,email,telephone,adresse,langue,source,type,commentaire,demande,assermente,fil,nomTrad,prenomTrad,emailTrad,devis,traduction,etat,prix,documentTraduit,avisPrix,ccp,ignorerNotif) values ('$date','$nom','$prenom','$email','$telephone','$adresse','$langue','$source','$type','$commentaire','$demande','$assermente','$fil','','','','non','oui','non effectue','0','','','','non')";

       mysqli_query($c,$reg);}     
       session_start();
       $_SESSION['origine']=$langue;
       $_SESSION['source']=$source;
       $_SESSION['assermente']=$assermente;
       $_SESSION['type']=$type;

      header("location:RooterDevisTrad.php?".$choix." ,".$_SESSION['type'].", ".$_SESSION['assermente'].", ".$_SESSION['source']."");
}
       $this->deconnexion($c); 
        
      }
      
       
    } 
}

public function  choisir_trad($email){
 
/*if(isset($_POST['suivant']))
     {*/
      
         $c=mysqli_connect("localhost","root","");
        mysqli_select_db($c,'siteTraduction');

       $r=" select * from devis";
       $a=$this->requete($c,$r);
       try{
       foreach ($a as $rowm) {
        $id=$rowm["id"];
        }
      }catch(Exception $e){
            echo'erreur'.$e->getMessage();
        }
       $r=" select * from recrutement where email='$email'";
       $a=$this->requete($c,$r);
       try{
       foreach ($a as $rowm) {
        $nom=$rowm["nom"];
        $prenom=$rowm["prenom"];
        }
      }catch(Exception $e){
            echo'erreur'.$e->getMessage();
        }

        $reg=" UPDATE devis SET nomTrad='$nom' , prenomTrad='$prenom',emailTrad='$email' WHERE id='$id'";
       mysqli_query($c,$reg);


      header("location:RooterProfil.php?Succes=Demande devis terminée avec succes");

       $this->deconnexion($c); 
        
     // }
}

  }?>