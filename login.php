<!DOCTYPE html>
<?php

?>
<html>
 <style>
family-font:Roboto;
 </style>
<head>
<div id="wrapper">
 <title>LEANEVENTOS</title>

 	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/leanevent.css">
<h4>
	<nav class="header">
		<img class="logo" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/logo-blanco.png" width=70 height =70>
		<a class="logoname"> LEANEVENTOS</a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/buyfromus.php> Comprar Boletos </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/login.php> Iniciar Sesion </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/contactus.html> Contacto </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/register.html> Registrate </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/leanevento/hello-world/> Blog </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/aboutus.php> Quienes Somos </a>
		<a style="float:right"  class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/homepage.php> Inicio </a>
		</nav>
</h4>
</div>

</head>
<body>
<div id="wrapper">
	<div class="aboutimg">
		<div  style="position: relative; left: 0; top: 0;">
			<img style="position:relative;top:0px;left:0px;"class="aboutimg1" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/bannerregistro.jpg" width=100% height=500>
			<div class="centered"><h1> INICIAR SESION</h1> </DIV>
				<div class="cent">
					<a class="centered1" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/homepage.php> HOME </a>
					<a class="centered2" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/login.php> INICIAR SESION </a>
				</div>
		</div>
	</div>
	<body>
	<div>
		<form class="loginform" onsubmit= "return validate()" Method="GET" action="<?=$_SERVER['PHP_SELF'];?>" >
			<div>
				<label class="loginlabel"> Iniciar Sesion</label>
			</div>
			<div class="usernamep">
				<div class="rowtable" >
				<div class ="fcol">
					<label class="username1"> Nombre de Usuario</label><br>
					<input class="inpttext1" type="text" name="username" id="username" placeholder="   Nombre de Usuario o Correo"  style="color:#000000;" required>
                    <span id="errorname"></span>
                    <br>
				</div>
				<div class="scol">
					<label class="username1"> Contrasena</label><br>
					<input class="inpttext109" type="text" name="password" id="password" placeholder="  Contrasena"  style="color:#000000;" required><br>
                    <span id="errorname1"></span>
				</div>
				</div>
				<center><a class="forgotpassword textcolor" href="forgotpassword.html"> Olvido su contrasena?</a></center><br>
			
				<center><button class="btn-group123" >Entra</button></center>
			</div>
		</form>
	</div>	
	
	<div class="footer">
	<div class="footerhead"><center>LEAN EN LAS REDES SOCIAL</center></div>
	<div class="social"><center>
		<div class="insta">
			<a class="tw" href="www.twitter.com/LeanEmergente" >  <img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/twiter.png" width=30px height=20px></a>
			<a class="tw" href="www.facebook.com/LeanAyudaHamanitaria">  <img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/faceboo.png"  width=30px height=20px></a>
			<a class="tw" href="www.instagram.com/LeanAyudaHamanitaria"><img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/insta.png" width=30px height=20px></a>
		</div>
			
	</div>
	<div class="lastline copyright"><p><center>Copyright&#169 2019. All rights reserved| This web is made with &#9825 by <span class="diaz"> DiazApps</span></center></div>
</div>	

</div>
</body>
<?php
$con= mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');
if ($con){
    echo("Connected");
}
else{
    echo("not connected");
}
$username=$_GET['username'];
$password=$_GET['password'];
$queryy="select `admin` from `registration_ind` where `emailID`='$username' AND `password`='$password'";
$sql=mysqli_query($con,$queryy);
$row = mysqli_fetch_array($sql);
if($sql){
    if(($row["admin"])=='Agent'){
        echo "<script> window.location.assign('agentlogin.html'); </script>";
       //header("Location:http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/agentlogin.html");
        setcookie("login", $username, time() * 100);
     return;
    }
        if(($row["admin"])=='fun'){
        echo "<script> window.location.assign('homepagefun.php'); </script>";
        // header("Location:http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/homepagefun.html");
         setcookie("login", $username, time() * 100);
     return;
    }
        if(($row["admin"])=='ind'){
        echo "<script> window.location.assign('homepageind.php'); </script>";
         //header("Location:http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/homepageind.html");
         setcookie("login", $username, time() * 100);
     return;
    }

}
else
{
    echo("NOT login");
}
    ?>
</html>