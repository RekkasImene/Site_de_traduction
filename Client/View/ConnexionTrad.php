<?php
class ConnexionTrad{
  public function connexionTrad_page(){ ?>
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
  min-height:700px;
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
    width:63%;
  right:0;left:65px;
    margin:auto;
    height:440px;
    background-color: rgba(30,30,30, 0.9);
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:400px;
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

        <h2>CONNECTEZ VOUS EN TANT QUE TRADUCTEUR</h2>
        <form method="POST" action="../Controler/checkTradRooter.php">

        
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
       
         <br><br>
        <input type="submit" name="signup" id="signup" value="Se connecter" >

                 <?php
        if(@$_GET['Empty']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Empty']; ?> </p>
    <?php
    }
    ?>
      </form>
  </div>
    </div>
    </div>  
 <script src="../View/Select/chosen.jquery.js" type="text/javascript"></script>
<script src="../View/Select/init.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
<?php
}}
?>