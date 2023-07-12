<?php


// require_once("connection.php");
$con = mysqli_connect("localhost","root","","doctor")
or die("failed to connect mysql server" .mysqli_connect_error());

if(isset($_POST['booking_id']))
{
    $book_id = mysqli_real_escape_string($con,$_POST['booking_id']);
    $admin_Fname = mysqli_real_escape_string($con,$_POST['Fname']);
    $admin_Lname = mysqli_real_escape_string($con,$_POST['Lname']);
    $admin_Mob = mysqli_real_escape_string($con,$_POST['Mob']);
    $admin_Mail = mysqli_real_escape_string($con,$_POST['Mail']);
    $admin_date = mysqli_real_escape_string($con,$_POST['date']);
    $admin_time = mysqli_real_escape_string($con,$_POST['time']);
    $admin_department = mysqli_real_escape_string($con,$_POST['department']);
    $admin_doct= mysqli_real_escape_string($con,$_POST['doctor']);

    $query = "UPDATE booking SET First_name='".$admin_Fname."', Last_name='".$admin_Lname."', Phone='".$admin_Mob."', Email='".$admin_Mail."', Date='".$admin_date."', Time='".$admin_time."', Department='".$admin_department."', Doctors = '".$admin_doct."' WHERE booking_id = '$book_id'";
    

    if(!mysqli_query($con,$query))
    {
       // header("location:list_doctor.php");
       echo "ERROR" .mysqli_error($con);
    }
    else
    {
        header("Location: list_user.php?msg=10");
    }
}



    ?>