<?php
$alert = "<script>alert(' Some Thing Went Wrong !');</script>";
//  require_once("connection.php");
$con = mysqli_connect("localhost","root","","doctor")
or die("failed to connect server" .mysqli_connect_error());
    
if(isset($_GET['Del'])){
        // echo"hello";
       
        $book_id = $_GET['Del'];
       
        $query = "DELETE FROM booking WHERE booking_id = '$book_id' " ;
        $result = mysqli_query($con,$query);
    
        if($result)
        {
            header("location:list_user.php?msg=11");
        }
        else
        {
            echo "ERROR" .mysqli_error($con);
        }
    }
     
?>