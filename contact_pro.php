<?php

$con= mysqli_connect("localhost","root","","doctor")
or die("Failed To Connect Server" .mysqli_connect_error());

$name= mysqli_real_escape_string($con,$_POST['name3']);
$mob= mysqli_real_escape_string($con,$_POST['mob3']);
$email= mysqli_real_escape_string($con,$_POST['email3']);
$msg= mysqli_real_escape_string($con,$_POST['msg3']);


$query= "INSERT INTO contact(Name, Mobile, Email, Message) 
          VALUES ('$name', '$mob', '$email', '$msg')";

if(!mysqli_query($con,$query)) 
{
    echo "ERROR" .mysqli_error($con);
}
else{
    header("Location: contact.php?msg=3");
}         
?>