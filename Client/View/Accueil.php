<?php
class Accueil{
	public function entete_page(){ ?>
		<!DOCTYPE html>
   <html lang="fr-FR" xmlns:fb="http://ogp.me/ns/fb#">

   <head>

  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=yes,width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="pingback" href="Rooter.php">

    <title>Compatible Electronique Translation</title>
    <meta name="description" content="Compatible Electronique Translation sert à traduire des textes publiés des clients par des traducteurs profitionnels.">

    <link rel="icon" type="image/png" href="../View/Images/logo2.png" sizes="96x96">

    <link rel="apple-touch-icon" sizes="180x180" href="../View/Images/logo2.png">

    <link rel="stylesheet" type="text/css" href="../View/StyleAccueil.css"/>
<link rel="stylesheet" href="../View/Select/chosen.css">
    <link rel="stylesheet" href="../View/Select/styleSelect.css">
     <script src="../JS/jquery-3.3.1.min.js" >  </script>

    
 </head>
 
 <body class="home">
 
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
 </br>


<div id="APdiapo">
<div class="diapo">
<img  src="../View/Images/facebook.png"/>
<img  src="../View/Images/instagram.png"/>
<img  src="../View/Images/twitter.png" />
<img src="../View/Images/gmail.png" />
</div>
</div>

</br>

<section class="values">
<div class="wrapper_grid">
<?php 
}
public function article(){ ?>
    <div class="span6">
        <h2 style="font-weight: bold;">DES SOLUTIONS LOGICIELLES AVANCÉES POUR DES ENJEUX GLOBAUX</h2>
        <div style="display: inline-block;">
     
                     <?php
                    try{
                    	$cnt=0;
                        $ct=new AccueilControler();
                        $qtm=$ct->getArticleControler();
                        foreach ($qtm as $rowm) {
                            ?>
                    <div class="span3">
                     <div class="img-values">  
                    <img src="<?php echo $rowm["image"]?>" alt="image">
                </div>
                    <h3 class="value<?php echo $cnt+1?>"><?php echo $rowm["name"];?></h3>
                <p><?php echo $rowm["description"];?></p>
                <details><p> <?php echo $rowm["detail"];?></p></details>
            </div>
            <?php
        $cnt=$cnt+1;
        }}
        catch(Exception $e){
            echo'erreur'.$e->getMessage();
        }
        ?>
          
        </div>
    </div>

    <div class="span6 staticform" data-select2-id="9">
       <h3 style="font-weight: bold;">Veuillez se connecter<br><span> avant de remplir le formulaire ci-dessus ! </span></h3>
<br>
      <ul id="ident" class="member-ident">
            <li class="member member-register"><a class="awesome greenghost" href="RooterInscription.php">S'inscrire</a></li>
            <li class="member member-login"><a class="awesome green" href="RooterConnexion.php">Connexion</a></li>
        </ul>

        <br><br>
        <h3 style="font-weight: bold;">Demandez vous de <br><span> devis de traduction / traduction d’un document ?</span></h3>

<section class="form-container">

    <div id="response-sales"></div>

    <form id="salesform" action="#" method="post" enctype="multipart/form-data">

        <div class="form-notifications">
            <p>Tous les champs sont requis</p>
            <p style="display: none;" class="error-msg">Certaines informations ne sont pas correctement renseignées</p>
        </div>

        <fieldset>
            <div class="control-group">
                <input type="text" name="xfirstname" placeholder="Prénom" required="">
            </div>
            <div class="control-group">
                <input type="text" name="xlastname" placeholder="Nom" required="">
            </div>
            <div class="control-group">
                <input type="email" name="xemail" placeholder="Email professionnel" required="">
            </div>
            <div class="control-group">
                <input type="text" name="xphone" placeholder="Téléphone" required="">
            </div>
            <div class="control-group">
                <input type="text" name="xcompany" placeholder="Adresse" required="">
            </div>
            <div class="control-group" data-select2-id="8">
<div class="side-by-side clearfix">
        
        <div>
            <label style="width: auto;color: black;margin-top: 6px;float: left;">Langue d'origine : </label>
            <br><br>
          <select data-placeholder="Choisir la langue..." class="chosen-select"  tabindex="4">
            <option value=""></option>
<option value="51">Albanien</option>
                                                                                            <option value="5">Allemand</option>
                                                                                            <option value="4">Anglais</option>
                                                                                            <option value="32">Arabe</option>
                                                                                            <option value="70">Arménien</option>
                                                                                            <option value="36">Azerbaijan</option>
                                                                                            <option value="71">Bengali</option>
                                                                                            <option value="66">Biélorusse</option>
                                                                                            <option value="54">Bosnie</option>
                                                                                            <option value="10">Bulgare</option>
                                                                                            <option value="67">Catalan</option>
                                                                                            <option value="7">Chinois</option>
                                                                                            <option value="72">Cinghalais</option>
                                                                                            <option value="12">Coréen</option>
                                                                                            <option value="45">Croatien</option>
                                                                                            <option value="18">Danois</option>
                                                                                            <option value="6">Espagnol</option>
                                                                                            <option value="63">Estonien</option>
                                                                                            <option value="24">Finnois</option>
                                                                                            <option value="9">Français</option>
                                                                                            <option value="41">Géorgien</option>
                                                                                            <option value="28">Grec</option>
                                                                                            <option value="43">Grec pontique</option>
                                                                                            <option value="29">Haïtien</option>
                                                                                            <option value="25">Hebreu</option>
                                                                                            <option value="17">Hongrois</option>
                                                                                            <option value="44">Indien</option>
                                                                                            <option value="20">Indonesien</option>
                                                                                            <option value="52">Islandais</option>
                                                                                            <option value="8">Italien</option>
                                                                                            <option value="13">Japonais</option>
                                                                                            <option value="49">Kazazakh</option>
                                                                                            <option value="59">Khmer</option>
                                                                                            <option value="56">Kirghize</option>
                                                                                            <option value="35">Kurde-Kurmanji</option>
                                                                                            <option value="65">Kurde-Sorani</option>
                                                                                            <option value="40">Latin</option>
                                                                                            <option value="15">Latvien</option>
                                                                                            <option value="16">Lithuanien</option>
                                                                                            <option value="48">Macédonien</option>
                                                                                            <option value="47">Malais</option>
                                                                                            <option value="58">Moldovan</option>
                                                                                            <option value="69">Mongol</option>
                                                                                            <option value="61">Monténégrins</option>
                                                                                            <option value="22">Néerlandais</option>
                                                                                            <option value="74">Népalais</option>
                                                                                            <option value="19">Norvégien</option>
                                                                                            <option value="64">Oughour</option>
                                                                                            <option value="50">Ouzbékistan</option>
                                                                                            <option value="57">Pashtou</option>
                                                                                            <option value="33">Perse</option>
                                                                                            <option value="62">Philippen</option>
                                                                                            <option value="11">Polonais</option>
                                                                                            <option value="21">Portuguais</option>
                                                                                            <option value="23">Roumain</option>
                                                                                            <option value="14">Russe</option>
                                                                                            <option value="46">Serbe</option>
                                                                                            <option value="31">Slovakien</option>
                                                                                            <option value="53">Slovenien</option>
                                                                                            <option value="38">Suédois</option>
                                                                                            <option value="42">Syriaque</option>
                                                                                            <option value="73">Tagalog</option>
                                                                                            <option value="30">TCHÉQUE</option>
                                                                                            <option value="26">Thailandais</option>
                                                                                            <option value="60">Tibétain</option>
                                                                                            <option value="3">Turc</option>
                                                                                            <option value="34">Turc Ottoman</option>
                                                                                            <option value="39">Turkmain</option>
                                                                                         <option value="37">Ukranien</option>
                                                                                            <option value="55">Urdu</option>
                                                                                            <option value="27">Vietnamien</option>
                                                                                            <option value="68">Zaza</option>
          </select>
        </div>
      </div>
<br><br> <br> 
          <div class="control-group" data-select2-id="8">
<div class="side-by-side clearfix">
        
        <div>
            <label style="width: auto;color: black;margin-top: 6px;float: left;">Langue source : </label>
            <br><br>
          <select data-placeholder="Choisir la langue..." name="source" class="chosen-select" tabindex="4">
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
 <br><br> <br> 
 <div class="control-group" data-select2-id="8">
    <label style="width: auto;color: black;margin-top: 6px;float: left;">Type de traduction souhaité :</label>
          <br><br>
          <select data-placeholder="Choisir le type..." class="chosen-select" tabindex="2">
            <option value=""></option>
            <option value="General" >Général</option>
            <option value="scientifique">Scientifique</option>
            <option value="site" >Site Web</option>
            
          </select>

</div>
<br>

<div class="control-group">
                <textarea name="xinfos" placeholder="Commentaires "></textarea>
</div>
<div class="control-group">
                <textarea name="xinfos" placeholder="Demandes Spécifiques "></textarea>
</div>

<div class="control-group">
              <label style="width: auto;color: black;margin-top: 6px;float: left;">Voulez vous un traducteur assermenté ?</label>
           <INPUT type="radio" name="choix" Id="oui" value="Oui" > Oui&nbsp;&nbsp; </INPUT>
           <INPUT type="radio" name="choix" Id="non" value="Non" > Non&nbsp;&nbsp;</INPUT>

</div>

<div class="control-group">
<label style="width: auto;color: black;margin-top: 6px;float: left;"> Voullez-vous une traduction ou bien un devis de traduction?   </label>
           <INPUT type="radio" name="choix1"  value="devis" > Devis&nbsp;&nbsp; </INPUT>
           <INPUT type="radio" name="choix1"  value="traduction" > Traduction&nbsp;&nbsp;</INPUT>

</div>
         </br> </br>
         <div class="control-group">
             <label style="width: auto;color: black;margin-top: 6px;float: left;"> Fichier à joindre : </label>
              <br><br>
              <input type="file" name="file-32" size="40" id="fileElem" accept=".doc,.docx,.ppt,.pptx,.odd,.txt,.csv,.tsv,.xls,.xlsx,.pdf,.jpg,.png,.gif,.css,.html,.php,.js" aria-required="true" aria-invalid="false" >
             </div>
<br> 
            <div class="control-group center">
                <button id="optinsales" type="button" class="btn btn-lp btn-primary optin" title="Send to CTE" onclick="myFunction()">Envoyer</button>
<br> <br>
                <p id="text" style="width: auto;color:red!important;margin-top: 6px;float: left;font-weight: bold;font-size: 20px;"></p>
                
            </div>

        </fieldset>
        <small>Nous respectons la confidentialité de vos informations et nous ne les utiliserons que dans le cadre de nos échanges.</small>
    </form>

</section>
 <script src="../View/Select/chosen.jquery.js" type="text/javascript"></script>
<script src="../View/Select/init.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
  function myFunction() {
  var hidden="Veillez se connecter chez nous pour pouvoir demander un devis.";
  document.getElementById("text").innerHTML = hidden;

}
</script>
</body>

</br>
<!--<footer>
	<nav>
<ul >
 <li ><a href="default.asp">Accueil</a></li>
  <li><a href="traduction.asp">Traduction Offerte</a></li>
  <li ><a href="traducteurs.asp">Traducteur</a></li>
  <li><a href="blig.asp">Blog</a></li>
    <li><a href="Recrutement.asp">Recrutement</a></li>
      <li><a href="aPropos.asp">A propos</a></li>
</ul>	
</nav>
</footer>-->

</html>

<?php
}
}
?>