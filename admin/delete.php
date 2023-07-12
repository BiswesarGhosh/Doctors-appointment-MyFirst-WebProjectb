<?php
$alert = "<script>alert(' Some Thing Went Wrong !');</script>";
//  require_once("connection.php");
$con = mysqli_connect("localhost","root","","doctor")
or die("failed to connect server" .mysqli_connect_error());
    
if(isset($_GET['Del'])){
        // echo"hello";
       
        $id = $_GET['Del'];
       
        $query = "DELETE FROM admin_edit WHERE id = '$id' " ;
        $result = mysqli_query($con,$query);
    
        if($result)
        {
            header("location:list_doctor.php?msg=9");
        }
        else
        {
            echo "ERROR" .mysqli_error($con);
        }
    }
  
?>