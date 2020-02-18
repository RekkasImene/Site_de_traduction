 <?php
class Connexion{
  public function connexion_page(){ ?>
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
    <style>
    
@import url('https://fonts.googleapis.com/css?family=Mukta');
body{
  font-family: 'Mukta', sans-serif;
  height:100%;
  min-height:1050px;
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
    transform: translateY(50%);
  text-align:center;
    width:70%;
  right:0;left:0;
    margin:auto;
    height:400px;
    background-color: rgba(30,30,30, 0.9);
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:870px;
    position:absolute;
    top:-50px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
}
.login-reg-panel{
    color:#B8B8B8;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid #9E9E9E;
    padding:0 5px;
    width:150px;
    display:block;
    text-align:center;
    border-radius:3px;
    cursor:pointer;
}
.login-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
}
.register-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    
}
.right-log{right:50px !important;}

.login-show, 
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:50px;
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
.login-show input[type="text"], .login-show input[type="password"]{
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

.register-show input[type="text"], .register-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.register-show input[type="submit"] {
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
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
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
    <div class="login-info-box">
      <h2>Vous avez déja un compte chez nous?</h2>
      <p>Cliquez sur s'identifier pour se connecter à votre compte</p>
      <label id="label-register" for="log-reg-show">S'identifier</label>
      <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
    </div>
              
    <div class="register-info-box">
      <h2>Vous n'avez pas un compte chez nous?</h2>
      <p>Cliquez sur s'inscrir pour avoir un compte</p>
      <label id="label-login" for="log-login-show">S'inscrir</label>
      <input type="radio" name="active-log-panel" id="log-login-show">
    </div>
              
    <div class="white-panel">
       <div class="login-show">
        <h2>S'identifier</h2>
      <form method="POST" action="../Controler/checkRooter.php">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
       <!-- <input type="button" name="signup" id="signup" value="S'indentifier" >onclick="functionOpen()">-->
        <!--<button type="submit" name="signin" id="signin"  > S'indentifier </button>-->
        <input type="submit" name="signup" id="signup" value="S'indentifier" >
        <a style="font-weight: bold;" href="RooterConnexionTrad.php">Connectez en tant que traducteur!</a>
             <?php
        if(@$_GET['Empty']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Empty']; ?> </p>
    <?php
    }
    ?>
        
    </form>
     </div>
      <div class="register-show">
        <h2>S'inscrir</h2>

      <form method="POST" action="../Controler/registerRooter.php">
      	
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
           <input type="text" name="wilaya" id="wilaya" placeholder="wilaya">
            <input type="text" name="commune" id="commune" placeholder="Commune">
             <input type="text" name="adresse" id="adresse" placeholder="Adresse">
              <input type="text" name="telephone" id="telephone" placeholder="Téléphone">
               <input type="text" name="fax" id="fax" placeholder="Fax">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
        <input type="password" placeholder="Confirmer le mot de passe">
        <!--
         <button type="submit" name="signin" id="signin"  > S'inscrir </button>onclick="functionOpen()">-->

         <input type="submit" name="signin" id="signin" value="S'inscrir" >

      </form>
        </div>
    </div>
  </div>
 <!-- <script type="text/javascript">
    function functionOpen() {
     document.location ='../View/Profil.php';
   }
  </script>-->
  <script>
    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});



    
    
</script>
</body>
</html>
<?php
}}
?>