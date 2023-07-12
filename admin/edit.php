<?php
// require_once ("connection.php");
$con = mysqli_connect("localhost","root","","doctor")
or die("failed to connect mysql server" .mysqli_connect_error());

$id = $_GET['GetID'];
$query = "SELECT * FROM admin_edit WHERE id = '$id'";
$result = mysqli_query($con,$query);
while($row= mysqli_fetch_assoc($result)) {

    $id = $row['id'];
    $admin_dept = $row['department'];
    $admin_doct = $row['doctors'];
    
}
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

  <h1 class="fs-1 text-center bg-success ">Edit Doctors</h1>


 
<!--ADD DOCTOR START-->




<div class="" id="exampleModall">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p id="st"><img src="../image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
        
      </div>
      <div class="modal-body" style="background-color: #268454">

  <form class="px-4 py-3" action="update.php?ID=<?php echo $id;?>" method="post">
    <input type="hidden" name="id" value="<?php echo $id ;?>">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Department</b></label>
      <input type="text" name="depart" class="form-control" id="exampleDropdownFormEmail1" placeholder="Enter Department Name" value="<?php echo $admin_dept;?>" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label"><b>Doctor</b></label>
      <input type="text" name="doct" class="form-control" id="exampleDropdownFormPassword1" placeholder="Enter Doctor Name" value="<?php echo $admin_doct;?>" Required>
    </div>
    <div class="mb-3">
      <div class="form-check mt-5">
        <input type="checkbox" class="form-check-input" id="dropdownCheck" Required>
        <label class="form-check-label" for="dropdownCheck">
         <b style="color:white"> Remember me </b>
        </label>
      </div>
    </div>
    <input type="submit" class="btn btn-warning position-relative top-50 start-50 translate-middle mt-5" value="Save">
    <a href="list_doctor.php"><button type="button" class="btn btn-warning text-center position-relative top-50 start-50 translate-middle mt-5">Back </button></a>
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