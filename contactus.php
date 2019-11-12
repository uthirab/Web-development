<?php
$con =  mysqli_connect('localhost:3306', 'uthiraba_webdata', 'uthirabaskaran', 'uthiraba_WDM');

if($con){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}

$regexemail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
$regexname = '/^([a-zA-Z])+$/';
$token= rand();
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$topic=$_GET['topic'];
$msg=$_GET['msg'];

$sql="insert into contact_lean (Token_id,First_Name,Last_Name, email, Topic,Message) values ('$token','$fname','$lname','$email','$topic','$msg')";


if (preg_match($regexemail, $email)) {
    if(preg_match($regexname,$fname)){
        if(preg_match($regexname,$lname)){
            $query=mysqli_query($con,$sql);
        }
    }
} else { 
    $query=false;
}           

if($query){
    echo file_get_contents("http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/contactus.html");
     return;
}
else{
    echo'data not inserted';
}




?>
