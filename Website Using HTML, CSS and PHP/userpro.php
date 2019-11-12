<?php
$con =  mysqli_connect('localhost', 'root', '', 'lean_webpage');

if($con){
 echo 'Could connect database ';
}

else{
echo 'could not connect to server';
}

$regexemail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
$regexname = '/^([a-zA-Z])+$/';
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$pass=$_GET['password'];
$user=$_GET['username'];
$phone=$_GET['phone'];




$sql="UPDATE registration_ind SET `First_Name`='$fname',`Last_Name`='$lname',`Password`='$pass',`Username`='$user',`PhoneNo`='$phone' where `emailID`='$email'";

if (preg_match($regexemail, $email)) {
    if(preg_match($regexname,$fname)){
        if(preg_match($regexname,$lname)){
           $query=mysqli_query($con,$sql);
        }
    }
}    

if($query){
    
    echo file_get_contents("http://uthirabaskaran.uta.cloud/Assignment_2/Baskaran_leanevent/register.html");
    
     return;
}
else{
    echo('email not matched with yours. Enter correct emailID')
    echo'data not inserted';
}


?>
