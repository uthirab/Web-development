<!DOCTYPE html>
<html>
<head>

<style>
td {
  padding: 0px 18px;

}

</style>
<div id="wrapper">
 <title>LEANEVENTOS</title>
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
			<img style="position:relative;top:0px;left:0px;"class="aboutimg1" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/bannercboleto.jpg" width=100% height=500>
			<div class="centered"><h1> COMPRAR BOLETOS </h1></DIV>
				<div class="cent">
					<a class="centered1" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/homepage.php> HOME </a>
					<a class="centered2" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/buyfromus.php> COMPRAR BOLETOS </a>
				</div>
		</div>
	</div>
	<div class ="homepage">
		<div class="homehead"><center>NUESTROS EVENTOS</center></div>
		<p class="homecontent"><center>Tu asistencia es importante para nosotros visitanos en los eventos qu estamos realizando.</p>
	</div>
    <?php
$conn =  mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');

if($conn){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}

$sqll = "SELECT * from `event`";
$rs=mysqli_query($conn,$sqll);

while($row = mysqli_fetch_array($rs)){
    echo'
		<div class="buyfromusta">
		<table>
			<tr>
				<td>
					<img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/minibaner4.jpg" width=200px height=210px>
					</td>
					</td>
				</tr>
			<tr class="secondrow">
				<td ><a class="lo" href="cart.php">'; echo($row["event_name"]);
            $cookie_name='id';
            $event=$row['Event_id'];
         //   setcookie($cookie_name, $event, time() + (86400 * 30), "/");
     echo'</td>
			</tr>
			<tr class=" secondrow thirdprice">
				<td> ';echo($row["Ticket_price"]); echo'</td>
			</tr>';
}
    	
echo'
		</table>
	</div>
	
	<div>
		<table class="numberlines">
			<tr>
				<td><<</td>
				<td class="ON1">1</td>
				<td >2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>>></td>
			</tr>
		</table>
	</div>
	';
    if(isset($_COOKIE["1"])){
    echo "Hi " . $_COOKIE["1"];
    }
	echo($_COOKIE['1']);

    ?>
	
	
	
<div class="homeform">
  <form>
  	  <div class="homereg">
		<div class="input-group">
			<span class="homein"><b>Registrese para recibir un boletin</b></span>
     		<input class="homee" type="email" placeholder="Introduce tu correo electronico">
			<button class="button" type="submit">Suscribir</button>
  </div>
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
</html>
	