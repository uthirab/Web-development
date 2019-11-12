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
		<a style="float:right" class ="lo" href=buyfromus.html> Comprar Boletos </a>
		<a style="float:right" class ="lo" href=login.html> Iniciar Sesion </a>
		<a style="float:right" class ="lo" href=contactus.html> Contacto </a>
		<a style="float:right" class ="lo" href=register.html> Registrate </a>
		<a style="float:right" class ="lo" href=Blog.html> Blog </a>
		<a style="float:right" class ="lo" href=aboutus.html> Quienes Somos </a>
		<a style="float:right"  class ="lo" href=homepage.html> Inicio </a>
	
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
	
	<div class="rowccart" >
	
			<div class ="fcolcart">
				<img class="img2" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/minibaner4.jpg" width=85%height="390px">
			</div>
    <?php
$conn =  mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');

if($conn){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}
$eventid=$_COOKIE['id'];
$sqll = "SELECT * from `event` where `Event_id`='1819754271'";
$rs=mysqli_query($conn,$sqll);
$row = mysqli_fetch_array($rs);
    
    echo'
			<div class="scolcart">
				<p><font size="4"> ';echo($row["event_name"]); echo'</font></p>
			    <p><font size="4"> $';echo($row["Ticket_price"]); echo'</font>';
                    ?>
					<span style="font-size:100%;color:#ffc300;float:right;">&star;<span style="color:black">(74 Ratings)</span></span>
					<span style="font-size:100%;color:#ffc300;float:right">&starf;</span>
					<span style="font-size:100%;color:#ffc300;float:right">&starf;</span>
					<span style="font-size:100%;color:#ffc300;float:right">&starf;</span>
					<span style="font-size:100%;color:#ffc300;float:right">&starf;</span>
				</p>
				<p><div class="moveaside">
						iLa fe no se puede perder JAMAS! Es imprescindible para todo en nuestras vidas,poco a poco las cosas irán mejorando. No cambiaran de la noche a la mañana,pero van a cambiar y solo cambiarán si te lo propones Si hoy tuvimos un mal dia,nuestra meta es tener un mejor mañana Es básicamente hacer nuestra la frase "Hoy no me daré por vencido, repitela todos los dias hazla parte de tu filosofia de vida</br></br>Numero de Entradas</br></br>
					</div>
				</p>

				<input class="Shirtt" type="button" value="-"/>	
				<input  class="numberingcart" type="text" value="1"/></span>
				<input class="Shirtt" type="button" value="+"/></br>
					</br>
				<form><button  class="cartbutton"formaction="cart2.php"> <img class="editimage12" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/cart.jpg" width=15px height=15px> Comprar</button></form>

			</div>
		</div>
		<div class="newdiv">
			<span class="nexttab1"><span class="Gumdu"><span class="Geno1"><input class="Shirt1" type="button" value="DESCRIPCION"/></span></span>
			<div   id="umber"><span class="Stalian"><textarea rows="19" cols="130">
			Recien he comenzado a leer un libro cuyo mensaje principal es aprender a buscar ese algo mejor todos los dias El libro esta escrito por una persona que vive con diabetes tipo 1 y nos preenta como los adelantos en tratamientos y tecnologia, aunque no han curado su condición, dia tras dia mejoran su calidad de vida 
			
			Busquemos siempre mejorar algo en nuestras vidas, macOs el deseo de progresar de educarnos más acerca de la condición de nuestros hijos y verás como poco a poco comenzaremos a entenderia mejor
			</textarea></span>
			</div>
			</span>
			<span class="nexttab"><span class="Gumdu"><span class="Geno"><input class="Shirt" type="button" value="ENCARGADOS"/></span></span>
			<div id="Mathi"><span class="Stalian"><textarea rows="19" cols="130">
			--------------------------------------------NA---------------------------------------------
			</textarea></span>
			</div>
			</span>
			<span class="nexttab"><span class="Gumdu"><span class="Geno"><input class="Shirt" type="button" value="PATROCINANTES"/></span></span>
			<div id="Mathi"><span class="Stalian"><textarea rows="19" cols="130">
			  --------------------------------------------NA---------------------------------------------
			</textarea></span>
		</DIV>
		</div>

			
			
			
			
			
			
			
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
	