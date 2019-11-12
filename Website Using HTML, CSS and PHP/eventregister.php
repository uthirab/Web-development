<!DOCTYPE html>
<html>
<head>
<style>
td {
  padding: 0px 18px;
}
hr{
color:#f2f2f2;
}
</style>
<div id="wrapper">
 <title>LEANEVENTOS</title>
    <link rel="stylesheet" type="text/css" href="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/leanevent.css">
<h4>
	<div class="header">
		<img class="logo" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/logo-blanco.png" width=70 height =70>
		<a class="logoname"> LEANEVENTOS</a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/agentprofile.html> Agente </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/eventos.php> Eventos </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/funlist.php> List de Fundaciones </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/vollist.php> List de voluntarios</a>
		<a style="float:right"  class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/agentlogin.html> Inicio </a>
		</div>
</h4>
</div>
</head>
<body>
<div id="wrapper">
	<div class="aboutimg">
		<div  style="position: relative; left: 0; top: 0;">
			<img style="position:relative;top:0px;left:0px;"class="aboutimg1" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/bannerregistro.jpg" width=100% height=500>
			<div class="centered"> RGISTRO DE EVENTO </DIV>
				<div class="cent">
					<a class="centered1" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/eventos.php> Eventos </a>
					<a class="centered2" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/eventregister.php> RGISTRO </a>
				</div>
		</div>
	</div>
			
	<div class="indprofiletable" >
			<div class="indprofiletable1">
				<form class="indprofileform" style="background-color:#f4f4f4;"  onsubmit= "return validate()" Method="GET" action="<?=$_SERVER['PHP_SELF'];?>">
					<div class="indprofilehead">
					<label > Estar en Contacto</label><br>
					</div>		
					<hr>
						<div class="indtablerow" >
							<div class ="fcolpro">
								<label class="fname">Nombre</label><br>
									<input class="inpttextpro" id="name" name="name" type="text" placeholder="   Nombre del Evento" required><br>
								<label class="fname">Responsable</label><br>
									<input class="inpttextpro" id="res" name="res" type="text" placeholder="   Nombre del Responsable" required>	
							</div>
							<div class="scolpro">
								<img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/imagensubir.png" width=125px height=125px><br><button class="btn-group1pro">Seleccionar Imagen</button>
							</div>
						</div>
						<div class="emailcontact" >
							<label class="emailcontact1">Lugar</label><br>
							<input class="inpttextpro1" type="text" id="address" name="address" placeholder="   Direccion del Lugar del Eventos" required>
						</div>
						<div class="rowinfoind" >
							<div class ="fcolinfoind">
								<label class="fname">Fecha</label><br>
									<input class="inpttextpro21" id="date" name="date" type="text" placeholder="   0000/00/00" required><br>
							</div>
							<div class="scolinfoind">
								<label class="fname">Hora</label><br>
									<input class="inpttextpro21" id="time" name="time"type="text" placeholder="   00.00" required>	
							</div>
							<div class="tcolinfoind">
								<label class="fname">Valor de Boleto</label><br>
									<input class="inpttextpro21" id="cost" name="cost" type="text" placeholder="   $000.00" required>	
							</div>
						</div>
						<div class="guarder">
							<button class="btn-group1gua">Guardar</button>
						</div>
					</div>
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
	<div class="lastline copyright"><center>Copyright@2019. All rights reserved| This web is made with &#9825 by DiazApps</center></div>
</div>	
</div>
<script>
function validate(){

    var username= document.getElementById("name");
    var password = document.getElementById("res");
    if (allletter(username)){
        if (allletter(password)){
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}
function allletter(x)
    {
    var regex = /^([a-zA-Z/s])+$/;
    result= (regex.test(x.value));
    if(result){
        return true;
    }else{
        x.focus();
        return false;
    }    
    }

    </script>  
    
<?php
$con= mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');
if ($con){
    echo("Connected");
}
else{
    echo("not connected");
}
$id=rand();
$name=$_GET['name'];
$res=$_GET['res'];
$place=$_GET['address'];
$date=$_GET['date'];
$hour=$_GET['time'];
$cost=$_GET['cost'];

$queryy="INSERT INTO `event`(`Event_id`, `event_name`, `Responsible`, `Place`, `Date`, `hours`, `Ticket_price`, `Tickets_available`, `Summary`, `Description`, `Manager`, `Sponsor_name`, `Event_pic`) VALUES ('$id','$name','$res','$place','$date','$hour','$cost',' ',' ',' ',' ',' ',' ')";
if ($name!=NULL){
$sql=mysqli_query($con,$queryy);
}
else{
    $sql=false;
    }
    echo($queryy);
if($sql){
    echo("Inserted");
}
else
{
    echo("Not inserted");
}
    ?>
</body>
</html>