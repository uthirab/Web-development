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
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/agentprofile.php> Agente </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/eventos.php> Eventos </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/funlist.php> List de Fundaciones </a>
		<a style="float:right" class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/vollist.php> List de voluntarios</a>
		<a style="float:right"  class ="lo" href=http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/agentlogin.html> Inicio </a>
		
		</nav>
</h4>
</div>
</head>

<body>
<div id="wrapper">
<p class="indhead"> Lista de Fundacioness</p>
<div class="indtable">
	<table >
		<tr class="indheader">
			<th colspan="2"> NOMBRE DE FUNDACIONES</th>
			<th class="col2">EVENTO</th>
			<th class="col3">RESPONSABLE</th>
			<th class="col4">COMISION</th>
			<th class="col5">CONFIRMAR</th>
		</tr>
<?php
$conn =  mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');

if($conn){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}

$sqll = "SELECT * from `registration_ind` where `admin`='IND'";
$rs=mysqli_query($conn,$sqll);

while($row = mysqli_fetch_array($rs)){
   $em=$row['emailID'];
   $sq = " SELECT * from `event_res` where `email`= '$em'";
        $r=mysqli_query($conn,$sq);
        if($go= mysqli_fetch_array($r)){
        $event=$go["eventID"];
        $s = " SELECT * from `event` where `Event_id`= '$event";
        $qw=mysqli_query($conn,$s);
        $goi= mysqli_fetch_array($qw);
        $res=$goi['Responsible'];
        }
        else{
        $event='NOT Assigned';
        $res = 'NOT Assigned';
        }
    echo'

		<tr class="indrows">
			<td class="firstcolumn"><img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/user.png" width=100px height=110px></td>
			<td class="eventnameind">';echo($row["First_Name"]); echo' Fundaciones</td>
			<td class="col2">';echo($event); echo' </td>
			<td class="col3">';echo($res); echo'</td>
			<td class="col4"> 1</td>
			<td class="col5"><button class="btn-group" > Asignar</button></td>
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