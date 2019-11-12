<?php
$conn =  mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');

if($conn){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}
echo'
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
<p class="indhead"> Lista de Eventos</p>
<div class="agar"> 
    <form>
<button  formaction="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/eventregister.php" class="agregarbutton" > Agregar</button>
        </form></div><br>';

$sqll = "SELECT * from `event`";
$rs=mysqli_query($conn,$sqll);

echo '
<div class="indtable">
	<table >
		<tr class="indheader">
			<th colspan="2"> DETALLES DEL EVENTOS</th>
			<th class="col2">LUGAR</th>
			<th class="col3">FECHA</th>
			<th class="col4">MODIFICAR</th>
			<th class="col5">ELIMINAR</th>
		</tr>';
while($row = mysqli_fetch_array($rs)){
     if(isset($_POST['del_submit'])){
                $listItemID = $_POST['del_submit'];
                $q = "DELETE FROM event WHERE Event_id = '$listItemID' ";
                $r = mysqli_query($conn, $q);
               // header('Refresh:0');
            }
    echo'
    <form method="post" action=" ">      
		<tr class="indrows">
			<td class="firstcolumn"><img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/minibaner1.jpg" width=100px height=110px></td>
			<td class="eventnameind">';echo($row["event_name"]); echo'</td>
			<td class="col2">';echo($row["Place"]); echo' </td>
			
			<td class="col3">';echo($row["Date"]); echo'</td>
			<td class="col4"> <button class="editbutton" ><img class="editimage" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/edit.png"width=15px height=15px></button </td>
			<td class="col5"><button class="deletebutton"  name="del_submit" value="'.$row['Event_id'].'" id="del_submit"><img class="editimage" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/delete.png" width=20px height=20px> </button></td>
		</tr>';
}
function delete($Event_id){
    $sql = "Delete from `event` where Event_id='$Event_id'";
$r=mysqli_query($conn,$sq);
    if ($r){
        echo'DID';
    }
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