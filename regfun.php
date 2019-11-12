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
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$pass=$_GET['password'];
$address=$_GET['address'];
$city=$_GET['city'];
$zip=$_GET['zip'];
$state=$_GET['state'];
$type=$_GET['tipo'];
$who=$_GET['who'];

$sql="INSERT INTO `registration_ind`(`admin`,`First_Name`, `Last_Name`, `emailID`, `Password`, `Address`, `City`, `State`, `Zipcode`, `Username`, `PhoneNo`, `Businesstype`, `Businessname`, `Photo`) VALUES('$who','$fname','$lname','$email','$pass','$address','$city','$state','$zip',' ',' ','$type ',' ',' ')";



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
    echo'data not inserted';
}


?>
