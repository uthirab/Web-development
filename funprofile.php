<!DOCTYPE html>
<html>
<head>
<style>
html, body, {
    position:fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
}
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
	<div class="aboutimg">
		<div  style="position: relative; left: 0; top: 0;">
			<img style="position:relative;top:0px;left:0px;"class="aboutimg1" src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/bannercontacto.jpg" width=100% height=500>
			<div class="centered"><h1> PERFIL<h1> </DIV>
				<div class="cent">
					<a class="centered1" href=homepagefun.php> HOME </a>
					<a class="centered2" href=funprofile.php> PERFIL </a>
				</div>
		</div>
	</div>
<?php
$conn =  mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');

if($conn){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}
$sqll = "SELECT * from `registration_ind` where `emailID`='swe@gmail.com' AND `admin`='fun'";
$rs=mysqli_query($conn,$sqll);
while($row = mysqli_fetch_array($rs)){
echo '

	<div class="perfilind">Tu Inforacion del Perfil</div>
	<div class="perfilindtable">
		<div class="rowtableind" >
			<div class ="fcolind">
				<div class="indgap">
				<img src=	"http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/book.png" width=10px height=15px>
				<span> ';echo($row["First_Name"]); echo'</span>
					<br>
					</div>
				<div class="indgap">
					<img src=	"http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/book.png" width=10px height=15px>
						<span> ';echo($row["Last_Name"]); echo'</span>
					<br>
					</div>
				<div class="indgap">
					<img src=	"http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/contact.png" width=10px height=15px>
						<span>  ';echo($row["Businessname"]); echo'</span>
					</div>
				</div>
			<div class="scolind">
			<br>
					<img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/pin.png" width=10px height=15px>
						<span>  ';echo($row["Address"]); echo'</span><br>
					
					<div class="indgap">
					<img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/phone.jpg" width=10px height=15px>
						<span>';echo($row["PhoneNo"]); echo'</span><br>
					</div>
					<div class="indgap">
					<img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/parl/email.png" width=20px height=15px>
						<span>';echo($row["emailID"]); echo'</span>
					</div>
				</div>
				<div class="tcolind">
					<img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/nologo.png" width=150px height=150px>
				</div>
			</div>
		</div>';
}
	?>	
		
		
		
		<div class="indprofiletable" >
			<div class="indprofiletable1">
				<form class="indprofileform" style="background-color:#f4f4f4;" onsubmit='return regind()' method="GET" action="<?=$_SERVER['PHP_SELF'];?>">
					<div class="indprofilehead">
					<label > Estar en Contacto</label><br>
					</div>		
					<hr>
						<div class="indtablerow" >
							<div class ="fcolpro">
								<label class="fname">Nombre</label><br>
									<input class="inpttextpro" id="fname" name="fname"  type="text" placeholder="   Tu Nombre" required><br>
								<label class="fname">Apellido</label><br>
									<input class="inpttextpro" id="lname" name="lname" type="text" placeholder="   Tu Apellido" required>	
							</div>
							<div class="scolpro">
								<img src="http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/imagenes/imagenes/nologo.png" width=125px height=125px><br><button class="btn-group1pro">Seleccionar Foto</button>
							</div>
						</div>
						<div class="emailcontact" >
							<label class="emailcontact1">Correo</label><br>
							<input class="inpttextpro1"  id="email" name="email" type="text" placeholder="   Tu correo electronico" required>
						</div>
						<div class="rowinfoind" >
							<div class ="fcolinfoind">
								<label class="fname">Telefono</label><br>
									<input class="inpttextpro21"  id="phone" name="phone"  type="text" placeholder="   Telefono"r required><br>
							</div>
							<div class="scolinfoind">
								<label class="fname">Usario</label><br>
									<input class="inpttextpro21" id="username" name="username" type="text" placeholder="   Nombre de Usario" required>	
							</div>
							<div class="tcolinfoind">
								<label class="fname">Contrasena</label><br>
									<input class="inpttextpro21" id="password" name="password"  type="text" placeholder="   Contrasena" required>	
							</div>
						</div>
						<div class="Note"> 
							<button class="btn-groupnota"> Nota</button><br>
						</div>
						<div>
							<p class="notacon"> Solo puedu cambiar los daos(Telefono, Contrasena y Foto) 
							</p>
						</div>
						<hr>
						<div class="guarder">
							<button class="btn-group1gua">Guardar Cambios</button>
						</div>
					</div>
				</div>
				
<div class="footer">
<div class="justfooter">
	<div class="lastline copyright"><p><center>Copyright&#169 2019. All rights reserved| This web is made with &#9825 by <span class="diaz"> DiazApps</span></center></div></div>
</div>
</div>
            <?php
$regexemail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
$regexname = '/^([a-zA-Z])+$/';
$fname=$_GET["fname"];
$lname=$_GET['lname'];
$email=$_GET['email'];
$pass=$_GET['password'];
$user=$_GET['username'];
$phone=$_GET['phone'];

$image = basename($_FILES['image']['photo']);

    echo ($image);  



$sql="UPDATE `registration_ind` SET `First_Name`='$fname',`Last_Name`='$lname',`Password`='$pass',`Username`='$user',`PhoneNo`='$phone' where `emailID`='$email'";
echo($sql);
if (preg_match($regexemail, $email)) {
    if(preg_match($regexname,$fname)){
           $query=mysqli_query($conn,$sql);
    
    }
}    
if($query){
    
    echo'Good';
    
     return;
}
else{
    echo('email not matched with yours. Enter correct emailID<br>');
    echo'data not inserted';
}

          

?>
<script>
    
function regind()                                    
{ 
    
    var fname= document.getElementById("fname");
    var lname= document.getElementById("lname");
    var password= document.getElementById("password");
    var email=document.getElementById("email");
     
    if(allletter(fname)){
        if(allletter(lname)){
            if(pass(password)){
                if(mail(email)){        
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
    var regex = /^([a-zA-Z])+$/;
    result= (regex.test(x.value));
    if(result){
        return true;
    }else{
        x.focus();
        return false;
    }    
    }
    
function pass(z)
    {
    var len=z.value.length;
    if(len>8){
        return true;
    }
    else{
        alert('Enter a password of minimumm length 8');
        z.focus();
        return false;
        }
    }
    
    
function mail(y)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(y.value.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        y.focus();
        return false;
    }

}

</script>
</body>
</html>					
							
						
							
			
					
					
					
					
	