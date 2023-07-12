<?php
$alert= "<script>alert('This Records Are Already Exists!');</script>";

session_start();

$con= mysqli_connect("localhost","root","","doctor")
or die("Failed to connect server " .mysqli_connect_error());


if(isset($_POST['depart'])){
  $depart = stripcslashes($_POST['depart']);
 $depart = mysqli_real_escape_string($con,$depart);
 $doct =  stripcslashes($_POST['doct']);
 $doct = mysqli_real_escape_string($con,$doct);
 $query = "SELECT * FROM admin_edit WHERE department = '$depart' AND doctors = '$doct'";
 $result = mysqli_query($con,$query)
 or die(mysqli_error());
 $rows = mysqli_num_rows($result);

 if($rows==1){
      
    header("Location:login2.php?msg=6");
  
 }
 

else{
 



            $admin_depart=mysqli_real_escape_string($con,$_POST['depart']);
            $admin_doct=mysqli_real_escape_string($con,$_POST['doct']);

           
                $query1 = "INSERT INTO admin_edit(department, doctors)  VALUES ('$admin_depart', '$admin_doct')";
               
             
                if(!mysqli_query($con, $query1))
                {
                    echo "ERROR " .mysqli_error($con);
                }   
                else
                {   
                   header("Location: list_doctor.php?msg=5");
                }

            
           
            }  
        }           
?>