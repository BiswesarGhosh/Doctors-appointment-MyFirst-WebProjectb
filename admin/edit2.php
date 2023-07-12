<?php
// require_once ("connection.php");
$con = mysqli_connect("localhost","root","","doctor")
or die("failed to connect mysql server" .mysqli_connect_error());

$bookid = $_GET['GetID'];
$query = "SELECT * FROM booking WHERE booking_id = '$bookid'";
$result = mysqli_query($con,$query);
while($row= mysqli_fetch_assoc($result)) {

    $bookid = $row['booking_id'];
    $fname = $row['First_name'];
    $lname = $row['Last_name'];
    $mob = $row['Phone'];
    $email = $row['Email'];
    $date = $row['Date'];
    $time = $row['Time'];
    $depart = $row['Department'];
    $doct = $row['Doctors'];
    
}

     $query3 = "SELECT * FROM admin_edit";
     $result3 = mysqli_query($con,$query3);
     

     $query4 = "SELECT * FROM admin_edit";
     $result4 = mysqli_query($con,$query4);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS Link-->

    <link rel="stylesheet" href="../style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!--Font AwasomecLink-->

    <script src="https://kit.fontawesome.com/5a6ef5ad9c.js" crossorigin="anonymous"></script>

    <title>Doctor's Apointment</title>
  </head>
  <body>

  <h1 class="fs-1 text-center bg-success ">Edit Booking</h1>


 
<!--ADD DOCTOR START-->




<div class="" id="exampleModall">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p id="st"><img src="../image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
        
      </div>
      <div class="modal-body" style="background-color: #268454">

  <form class="px-4 py-3" action="update2.php?ID=<?php echo $bookid;?>" method="post">
    <input type="hidden" name="booking_id" value="<?php echo $bookid ;?>">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label fw-bolder">First Name*</label>
      <input type="text" class="form-control shadow bg-body rounded" name="Fname" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo ucfirst($fname);?>" Required>
</div>
<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Last Name*</label>
     <input type="text" class="form-control shadow bg-body rounded" name="Lname" id="exampleInputPassword1" value="<?php echo ucfirst($lname);?>" Required>
</div>
<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Phone Numer*</label>
     <input type="number" class="form-control shadow bg-body rounded" name="Mob" id="exampleInputPassword1" value="<?php echo ucfirst($mob);?>" Required>
</div>
<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Email*</label>
     <input type="email" class="form-control shadow bg-body rounded" name="Mail" id="exampleInputPassword1" value="<?php echo $email;?>" Required>
</div>
<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Select Date*</label>
     <input type="date" name="date" class="form-control shadow bg-body rounded" id="exampleInputPassword1" value="<?php echo $date;?>" Required>
</div>
<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Time*</label><br>
     <select class="form-select shadow bg-body rounded" name="time" aria-label="Default select example" Required>
<optio value="<?php echo $time;?>"><?php echo $time;?></option>
<option value="9 A.M">9 A.M</option>
<option value="11 A.M">11 A.M</option>
<option value="1 P.M">1 P.M</option>
<option value="3 P.M">3 P.M</option>
<option value="6 P.M">6 P.M</option>
</select>
</div>



<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Department*</label><br>
     <select class="form-select shadow bg-body rounded" aria-label="Default select example" name="department" Required>
     <option value="<?php echo $depart;?>"><?php echo $depart;?></option>
     <?php
          while($row3= mysqli_fetch_assoc($result3))
           {
               $dept= $row3['department'];
               
             
     ?>
<option value="<?php echo ucfirst( $dept); ?>"><?php echo ucfirst( $dept);?></option>
<?php 
           }
      ?>

</select>
</div>


      

<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Doctor*</label><br>
     <select class="form-select shadow bg-body rounded" name="doctor" aria-label="Default select example" Required>
<option value="<?php echo $doct;?>"><?php echo $doct;?></option>
<?php
          while($row4= mysqli_fetch_assoc($result4))
           {
               $doc= $row4['doctors'];
               
             
     ?>
<option value="<?php echo ucfirst( $doc); ?>"><?php echo ucfirst( $doc);?></option>
<?php 
           }
      ?>
</select>
</div>



<div class="mb-3 form-check">
     <input type="checkbox" class="form-check-input" id="exampleCheck1" Required>
     <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
  <input type="submit" value="Save" class="btn btn-outline-warning text-center position-relative top-50 start-50 translate-middle mt-5">
  <a href="list_user.php"><button type="button" class="btn btn-outline-warning text-center position-relative top-50 start-50 translate-middle mt-5">Back </button></a>
  </form>
</div>

  </form>
  <div class="dropdown-divider"></div>
      </div>
    </div>
  </div>
</div>
</form>



<!--ADD DOCTOR END-->


<?php

// $alert= "<script>alert('This Records Are Already Exists!');</script>";

// if(isset($_GET['msg']))
// {
//     $message = $_GET['msg'];
//     if($message == 6){
//      echo $alert;
//     }
// }

?>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>