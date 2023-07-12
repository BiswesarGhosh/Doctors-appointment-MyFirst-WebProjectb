<?php


// require_once("connection.php");
$con = mysqli_connect("localhost","root","","doctor")
or die("failed to connect mysql server" .mysqli_connect_error());

if(isset($_POST['id']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $admin_dept = mysqli_real_escape_string($con,$_POST['depart']);
    $admin_doct = mysqli_real_escape_string($con,$_POST['doct']);

    $query = "UPDATE admin_edit SET department = '".$admin_dept."', doctors = '".$admin_doct."' WHERE id = '$id'";
    

    if(!mysqli_query($con,$query))
    {
       // header("location:list_doctor.php");
       echo "ERROR" .mysqli_error($con);
    }
    else
    {
        header("Location: list_doctor.php?msg=8");
    }
}



    ?>