 <!DOCTYPE html>
<html>
<head>

<style>
body, head {
font-family:Roboto;
}


</style>
<div id="wrapper">
 <title>LEANEVENTOS</title>
    <link rel="stylesheet" type="text/css" href="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/leanevent.css">
<h4>
	<div class="header">
		<img class="logo" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/logo-blanco.png" width=70 height =70>
		<a class="logoname"> LEANEVENTOS</a>
		<a style="float:right" class ="lo" href=buyfromus.php> Comprar Boletos </a>
		<a style="float:right" class ="lo" href=login.php> Iniciar Sesion </a>
		<a style="float:right" class ="lo" href=contactus.php> Contacto </a>
		<a style="float:right" class ="lo" href=register.html> Registrate </a>
		<a style="float:right" class ="lo" href=Blog.html> Blog </a>
		<a style="float:right" class ="lo" href=aboutus.php> Quienes Somos </a>
		<a style="float:right"  class ="lo" href=homepage.php> Inicio </a>
	
	</div>
</h4>
</div>
</head>
<body>
<div id="wrapper">
	<div class="aboutimg">
		<div  style="position: relative; left: 0; top: 0;">
			<img style="position:relative;top:0px;left:0px;"class="aboutimg1" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/bannercboleto.jpg" width=100% height=500>
			<div class="centered"><h1> COMPRAR BOLETOS </h1></DIV>
				<div class="cent">
					<a class="centered1" href=homepage.html> HOME </a>
					<a class="centered2" href=buyfromus.html> COMPRAR BOLETOS </a>
				</div>
		</div>
	</div>

		<div id="forgotpasswd">
		<form class="popupform" >
			<div>
				<label class="popuplabel"> Add to CART </label>
			</div>
			<hr>
			<div class="usernamep">
				<label class="username1" style="text-align=left">Correo</label><br>
					<input class="inpttext999" id="email" name="email" type="text" placeholder="   Correo"><br>
                    
				</div>
				<hr>
				<div class="loginbutton">
				<button class="btn-group123 left">Entra</button>
				</div>
		</form>
 <?php
$conn =  mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');

if($conn){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}
$eventid=1819754271;
$sqll = "SELECT * from `event` where `Event_id`='1819754271'";
$rs=mysqli_query($conn,$sqll);
$row = mysqli_fetch_array($rs);
$ticket=$row["Ticket _price"];
$email=$_GET['email'];
$trans=rand();
$queryy="INSERT INTO `event_res`(`Email`, `eventID`, `transactionID`, `tickets`, `total`) VALUES ('$email','$eventid','$trans','$ticket','$ticket')
";
if($email!=''){
    $sql=mysqli_query($conn,$queryy);
}
else{
    echo'Need email';
}
if($sql){
    echo("Inserted");
}
else
{
    echo("Not inserted");
}
    ?>  