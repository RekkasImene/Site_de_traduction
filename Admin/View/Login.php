<?php
class Login{
  public function login_page(){ ?>
<!DOCTYPE html>
<html lang="fr-FR" xmlns:fb="http://ogp.me/ns/fb#">

   <head>

  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=yes,width=device-width,minimum-scale=1,initial-scale=1">

    <title>Admin CTE</title>

    <link rel="icon" type="image/png" href="../Images/logo2.png" sizes="96x96">

    <link rel="apple-touch-icon" sizes="180x180" href="../Images/logo2.png">

  <style type="text/css">
  	body{
  		margin:0;
  		padding: 0;
  		font-family: sans-serif;
     background: url(../Images/con4.jpeg) no-repeat;
     background-size: cover;
  		/*background: url(../Images/con4.jpeg) no-repeat;
  		
       background: #34495e;*/
  	}
    .box{
      width: 600px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
       background: #191919;
       text-align: center;

    }
    .box h1{
      color: white;
     text-transform: uppercase;
     font-weight: 500;
     border-bottom: 6px solid #2ecc71;
      margin-bottom: 50px;
      padding: 13px 0;

    }
    .box input[type="text"] , .box input[type="password"]{
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border:2px solid #2ecc71;
      padding: 14px 10px;
      width: 400px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
    }
     .box input[type="text"]:focus , .box input[type="password"]:focus {
       width: 480px;
       border-color: #2ecc71;

     }
     .box input[type="submit"]{
            border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border:2px solid #2ecc71;
      padding: 14px 40px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;

     }
     .box input[type="submit"]:hover{
      background: #2ecc71;
    }
  	

  </style>

 </head>
 
<body>
<div class="login-box">
	
	<form class="box" method="POST" action="../Rooter/checkRooter.php">
	<h1>Connexion</h1>
			<input type="text" name="nom" placeholder="Nom d'administrateur">


			<input type="password" name="mdp" placeholder="Mot de passe d'administrateur">

<?php
        if(@$_GET['Empty']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Empty']; ?> </p>
    <?php
    }
    ?>
    <?php
        if(@$_GET['Erreur']==true){
        ?>
        <p style="color: red;font-weight: bold;"> <?php echo $_GET['Erreur']; ?> </p>
    <?php
    }
    ?>
	<input class="btn " type="submit" name="singin" value="Se connecter">

	</form>
</div>
</body>
</html>
<?php
}}
?>