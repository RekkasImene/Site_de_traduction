<?php
class Recrutement{
  public function recrutement_page(){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compatible Electronique Translation</title>
    <meta name="description" content="Compatible Electronique Translation sert à traduire des textes publiés des clients par des traducteurs profitionnels.">

    <link rel="icon" type="image/png" href="../View/Images/logo2.png" sizes="96x96">

    <link rel="apple-touch-icon" sizes="180x180" href="../View/Images/logo2.png">

   <script src="../JS/jquery-3.3.1.min.js" >  </script>
   <link rel="stylesheet" type="text/css" href="../View/StyleHeader.css"/>
    
  <link rel="stylesheet" href="../View/Select/chosen.css">
    <link rel="stylesheet" href="../View/Select/styleSelect.css">

<style>
    
@import url('https://fonts.googleapis.com/css?family=Mukta');
body{
  font-family: 'Mukta', sans-serif;
  height:100%;
  min-height:1900px;
  background-image:url(../View/Images/con1.jpeg);
  background-repeat: no-repeat;
  background-size:cover;
  background-position:center;
  position:relative;
 
}
a{
  text-decoration:none;
  color:#444444;
}
.login-reg-panel{
    position: relative;
    top: 50%;
    transform: translateY(17%);
  text-align:center;
    width:63%;
  right:0;left:65px;
    margin:auto;
    height:1590px;
    background-color: rgba(30,30,30, 0.9);
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:1550px;
    position:absolute;
    left: 20px;
    top:20px;
    width:96%;
    right:calc(50% - 20px);
    transition:.3s ease-in-out;
    z-index:0;

}
.login-reg-panel{
    color:#B8B8B8;
}

.login-show{
    z-index: 1;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:50px;
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
.login-show input[type="text"], .login-show input[type="password"],.login-show input[type="file"],.login-show select{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}

.login-show input[type="submit"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
    display:inline-block;
    padding:10px 0;
}

    </style>

</head>
<body>
<header class="cd-auto-hide-header">

    <div class="logo">
    <a href="Rooter.php">
       <img src="../View/Images/logo4.svg" alt="Logo" class="lazyloading" data-was-processed="true">
  </a>
</div>

<div class="reseaux">
  <a href="www.facebook.com"><img class="resSoc" src="../View/Images/facebook2.png" /></a>
  <a href="www.instagram.com"><img class="resSoc" src="../View/Images/instagram2.png"/></a>
  <a href="www.twitter.com"><img class="resSoc" src="../View/Images/whatsapp2.png"/></a>
  <a href="www.gmail.com"><img class="resSoc" src="../View/Images/gmail2.png"/></a>
  <a href="www.youtube.com"><img class="resSoc" src="../View/Images/youtube2.png"/></a>
</div>

<nav class="cd-secondary-nav">
    <ul>
      <li><a class="c-accueil" href="../Controler/Rooter.php">Accueil</a></li>
      <li><a class="c-traduction" href="../View/Traduction.php">Types de Traduction</a></li>
      <li><a class="c-traducteur" href="../View/Traducteur.php"> Traducteurs</a></li>
      <li><a class="c-blog" href="../View/Blog.php">Blog</a></li>
      <li><a class="c-recrutement" href="../Controler/RooterRecrutement.php">Recrutement</a></li>
      <li><a class="c-apropos" href="../View/APropos.php">A propos</a></li>
      
    </ul>
  </nav>

</header>
   
   <div class="login-reg-panel">
 
              
    <div class="white-panel">
    <div class="login-show">

        <h2>INSCRIVEZ VOUS EN TANT QUE TRADUCTEUR</h2>
        <form method="POST" action="../Controler/recrutementRooter.php" enctype="multipart/form-data">
          <?php
        if(@$_GET['Empty']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Empty']; ?> </p>
    <?php
    }
    ?>
    <?php
        if(@$_GET['Empty1']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Empty1']; ?> </p>
    <?php
    }
    ?>
         <input type="text" name="nom" id="nom" placeholder="Nom">
          <input type="text" name="prenom" id="prenom" placeholder="Prénom">

      <div class="side-by-side clearfix">
        
        <div>
          <em>Vos langues de traduction</em>
          <select data-placeholder="Choisir vos langues..." name="langue" class="chosen-select" multiple tabindex="4">
            <option value=""></option>
<option value="Albanien">Albanien</option>
                                                                                            <option value="Allemand">Allemand</option>
                                                                                            <option value="Anglais">Anglais</option>
                                                                                            <option value="Arabe">Arabe</option>
                                                                                            <option value="Arménien">Arménien</option>
                                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                                            <option value="Bengali">Bengali</option>
                                                                                            <option value="Biélorusse">Biélorusse</option>
                                                                                            <option value="Bosnie">Bosnie</option>
                                                                                            <option value="Bulgare">Bulgare</option>
                                                                                            <option value="Catalan">Catalan</option>
                                                                                            <option value="Chinois">Chinois</option>
                                                                                            <option value="Cinghalais">Cinghalais</option>
                                                                                            <option value="Coréen">Coréen</option>
                                                                                            <option value="Croatien">Croatien</option>
                                                                                            <option value="Danois">Danois</option>
                                                                                            <option value="Espagnol">Espagnol</option>
                                                                                            <option value="Estonien">Estonien</option>
                                                                                            <option value="Finnois">Finnois</option>
                                                                                            <option value="Français">Français</option>
                                                                                            <option value="Géorgien">Géorgien</option>
                                                                                            <option value="Grec">Grec</option>
                                                                                            <option value="Grec pontique">Grec pontique</option>
                                                                                            <option value="Haïtien">Haïtien</option>
                                                                                            <option value="Hebreu">Hebreu</option>
                                                                                            <option value="Hongrois">Hongrois</option>
                                                                                            <option value="Indien">Indien</option>
                                                                                            <option value="Indonesien">Indonesien</option>
                                                                                            <option value="Islandais">Islandais</option>
                                                                                            <option value="Italien">Italien</option>
                                                                                            <option value="Japonais">Japonais</option>
                                                                                            <option value="Kazazakh">Kazazakh</option>
                                                                                            <option value="Khmer">Khmer</option>
                                                                                            <option value="Kirghize">Kirghize</option>
                                                                                            <option value="Kurde-Kurmanji">Kurde-Kurmanji</option>
                                                                                            <option value="Kurde-Sorani">Kurde-Sorani</option>
                                                                                            <option value="Latin">Latin</option>
                                                                                            <option value="Latvien">Latvien</option>
                                                                                            <option value="Lithuanien">Lithuanien</option>
                                                                                            <option value="Macédonien">Macédonien</option>
                                                                                            <option value="Malais">Malais</option>
                                                                                            <option value="Moldovan">Moldovan</option>
                                                                                            <option value="Mongol">Mongol</option>
                                                                                            <option value="Montenegrins">Monténégrins</option>
                                                                                            <option value="Neerlandais">Néerlandais</option>
                                                                                            <option value="Nepalais">Népalais</option>
                                                                                            <option value="Norvegien">Norvégien</option>
                                                                                            <option value="Oughour">Oughour</option>
                                                                                            <option value="Ouzbekistan">Ouzbékistan</option>
                                                                                            <option value="Pashtou">Pashtou</option>
                                                                                            <option value="Perse">Perse</option>
                                                                                            <option value="Philippen">Philippen</option>
                                                                                            <option value="Polonais">Polonais</option>
                                                                                            <option value="Portuguais">Portuguais</option>
                                                                                            <option value="Roumain">Roumain</option>
                                                                                            <option value="Russe">Russe</option>
                                                                                            <option value="Serbe">Serbe</option>
                                                                                            <option value="Slovakien">Slovakien</option>
                                                                                            <option value="Slovenien">Slovenien</option>
                                                                                            <option value="Suedois">Suédois</option>
                                                                                            <option value="Syriaque">Syriaque</option>
                                                                                            <option value="Tagalog">Tagalog</option>
                                                                                            <option value="TCHEQUE">TCHÉQUE</option>
                                                                                            <option value="Thailandais">Thailandais</option>
                                                                                            <option value="Tibetain">Tibétain</option>
                                                                                            <option value="Turc">Turc</option>
                                                                                            <option value="Turc Ottoman">Turc Ottoman</option>
                                                                                            <option value="Turkmain">Turkmain</option>
                                                                                         <option value="Ukranien">Ukranien</option>
                                                                                            <option value="Urdu">Urdu</option>
                                                                                            <option value="Vietnamien">Vietnamien</option>
                                                                                            <option value="Zaza">Zaza</option>
          </select>
        </div>
      </div>

<br><br><br>
 
          <em>Vous êtes quel type de traducteur?</em>
          <br>
          <select name="type" data-placeholder="Choisir votre type..." class="chosen-select" tabindex="2">
            <option value=""></option>
            <option value="General">Généraliste</option>
            <option value="Scientifique">Scientifique</option>
            <option value="Site web">Des sites web</option>
            
          </select>

           <input type="text" name="wilaya" id="wilaya" placeholder="wilaya">
            <input type="text" name="commune" id="commune" placeholder="Commune">
             <input type="text" name="adresse" id="adresse" placeholder="Adresse">
              <input type="text" name="telephone" id="telephone" placeholder="Téléphone">
               <input type="text" name="fax" id="fax" placeholder="Fax">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
        <input type="password" name="mdpConf" placeholder="Confirmer le mot de passe">
        <label> Fichiers CV à joindre en format ".pdf" : </label>
        <br>
        <input type="file" name="cv1" size="40" id="fileElem" accept=".pdf" aria-required="true" aria-invalid="false" >
        <input type="file" name="cv2" size="40" id="fileElem" accept=".pdf" aria-required="true" aria-invalid="false" >
        <input type="file" name="cv3" size="40" id="fileElem" accept=".pdf" aria-required="true" aria-invalid="false" >
        <br> <br>
        <input type="checkbox" name="assermente" id="myCheck" onclick="myFunction()"> Traducteur assermenté 

         <p id="text" style="display:none">Veillez joindre ici un fichier qui prouve votre assermentation</p>
         <input type="file" name="fil" size="40" id="fileElem1" style="display:none" accept=".doc,.docx,.ppt,.pptx,.odd,.txt,.csv,.tsv,.xls,.xlsx,.pdf,.jpg,.png,.gif,.css,.html,.php,.js" aria-required="true" aria-invalid="false" >
         <br><br>
        <input type="submit" name="signin" id="signin" value="S'inscrir" >
      </form>
  </div>
    </div>
    </div>  
 <script src="../View/Select/chosen.jquery.js" type="text/javascript"></script>
<script src="../View/Select/init.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
  function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  var fileElem = document.getElementById("fileElem1");

  if (checkBox.checked == true){
    text.style.display = "block";
    fileElem.style.display= "block";
  } else {
   fileElem.style.display= "none"; 
   text.style.display= "none"; 
  }
}
</script>

</body>
</html>
<?php
}}
?>