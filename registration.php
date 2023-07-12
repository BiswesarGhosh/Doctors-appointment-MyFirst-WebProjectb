<?php

$alert= "<script>alert('This Records Are Already Exists!');</script>";

session_start();
$con= mysqli_connect("localhost","root","","doctor")
or die("Failed to connect server " .mysqli_connect_error());


if(isset($_POST['fname'])){
  $fname1 = stripcslashes($_POST['fname']);
 $fname1 = mysqli_real_escape_string($con,$fname1);
 $lname1 =  stripcslashes($_POST['lname']);
 $lname1 = mysqli_real_escape_string($con,$lname1);
 $dob1 =  stripcslashes($_POST['dob']);
 $dob1 = mysqli_real_escape_string($con,$dob1);
 $mob1 =  stripcslashes($_POST['mob']);
 $mob1 = mysqli_real_escape_string($con,$mob1);
 $email1 = stripcslashes($_POST['email']);
 $email1 = mysqli_real_escape_string($con,$email1);
 $query1 = "SELECT * FROM user_register WHERE DOB = '$dob1' AND Mobile = '$mob1' AND Email = '$email1' AND First_name = '$fname1' AND Last_name = '$lname1'";
 $result1 = mysqli_query($con,$query1)
 or die(mysqli_error());
 $rows1 = mysqli_num_rows($result1);

 if($rows1==1){
      
    header("Location:index.php?msg=0");
 }
 
else{

$id= mysqli_real_escape_string($con,$_POST['id']);
$fname= mysqli_real_escape_string($con,$_POST['fname']);
$lname= mysqli_real_escape_string($con,$_POST['lname']);
$gname= mysqli_real_escape_string($con,$_POST['gname']);
$dob= mysqli_real_escape_string($con,$_POST['dob']);
$add= mysqli_real_escape_string($con,$_POST['add']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$pass= mysqli_real_escape_string($con,$_POST['pass']);
// $pass=md5($password);
$mob= mysqli_real_escape_string($con,$_POST['mob']);

$query= "INSERT INTO user_register(First_name, Last_name, Gardain_name, DOB, Address, Email, Password, Mobile, time) 
          VALUES ('$fname', '$lname', '$gname', '$dob', '$add', '$email', '$pass', '$mob', now())";

if(!mysqli_query($con,$query)) 
{
    echo "ERROR" .mysqli_error($con);
}
else{
    header("Location: index.php?msg=1");
}  

}
}
?>