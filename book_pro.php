<?php


$alert= "<script>alert('Your Booking Successfull!');</script>";
 

$con= mysqli_connect("localhost","root","","doctor")
or die("Failed To Connect Server" .mysqli_connect_error());

$Fname= mysqli_real_escape_string($con,$_POST['Fname']);
$Lname= mysqli_real_escape_string($con,$_POST['Lname']);
$Mob= mysqli_real_escape_string($con,$_POST['Mob']);
$Mail= mysqli_real_escape_string($con,$_POST['Mail']);
$date= mysqli_real_escape_string($con,$_POST['date']);
$time= mysqli_real_escape_string($con,$_POST['time']);
$department= mysqli_real_escape_string($con,$_POST['department']);
$doctor= mysqli_real_escape_string($con,$_POST['doctor']);

$query= "INSERT INTO booking(First_name, Last_name, Phone, Email, Date, Time, Department, Doctors, booking_time) 
          VALUES ('$Fname', '$Lname', '$Mob', '$Mail', '$date', '$time', '$department', '$doctor', now())";

if(!mysqli_query($con,$query)) 
{
    echo "ERROR" .mysqli_error($con);
}
else{
    header("Location: login.php?msg=$Mail&mesg=2");
   
}         
?>