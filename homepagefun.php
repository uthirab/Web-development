<!DOCTYPE html>
<html>
<head>
<style>

</style>
<div id="wrapper">
 <title>LEANEVENTOS</title>
    <link rel="stylesheet" type="text/css" href="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/leanevent.css">
<h4>
	<nav class="header">
		<img class="logo" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/logo-blanco.png" width=70 height =70>
		<a class="logoname"> LEANEVENTOS</a>
		<a style="float:right" class ="lo" href=funprofile.php> Fundacion </a>
		<a style="float:right"  class ="lo" href=homepagefun.php> Inicio </a>
	</nav>
</h4>
</div>
</head>
<body>
<div id="wrapper">
<p class="indhead"> Lista de Eventos</p>
<div class="indtable">
<?php
$conn =  mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');

if($conn){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}
$sqll = "SELECT * from `event_res` where `email`='swe@gmail.com'";
$mid=mysqli_query($conn,$sqll);
$mid1=mysqli_fetch_array($mid);
$SS=$mid1["eventID"];
$mid2= "SELECT * FROM `event` where `Event_id`='$SS'";
$rs=mysqli_query($conn,$mid2);
echo '
	<table >
		<tr class="indheader">
			<th colspan="2"> DETALLES DEL EVENTOS</th>
			<th class="col2">LUGAR</th>
			<th class="col3">FECHA</th>
			<th class="col4">HORA</th>
			<th class="col5">ASISTENCIA</th>
		</tr>';
		
    while($row = mysqli_fetch_array($rs)){
  echo'  
		<tr class="indrows">
			<td class="firstcolumn"><img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/minibaner1.jpg" width=100px height=110px></td>
			<td class="eventnameind">';echo($row["event_name"]); echo'</td>
			<td class="col2">';echo($row["Place"]); echo'</td>
			
			<td class="col3">';echo($row["Date"]); echo'</td>
			<td class="col4"> ';echo($row["hours"]); echo' </td>
			<td class="col5"><button class="btn-group" > Confirmar</button></td>
		</tr>';
    }
    ?>
    </table>	
	</div>
	
<div class="footer">
<div class="justfooter">
	<div class="lastline copyright"><p><center>Copyright&#169 2019. All rights reserved| This web is made with &#9825 by <span class="diaz"> DiazApps</span></center></div></div>
</div>
</div>
</body>
</html>