
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

    <title>Doctor's Apointment</title>
  </head>
  <body>



  <?php
	$alert1= "<script>alert('Incorrect userid and password!');</script>";

  $con= mysqli_connect("localhost", "root","","doctor")
    or die("Fail to Connect Server" .mysqli_connect_error());
	session_start();


if(isset($_POST['email2'])){
     $email2 = stripcslashes($_REQUEST['email2']);
    $email2 = mysqli_real_escape_string($con,$email2);
    $pass2 =  stripcslashes($_REQUEST['pass2']);
    $pass2 = mysqli_real_escape_string($con,$pass2);
    $query1 = "SELECT * FROM admin WHERE user = '$email2' AND pass = '$pass2'";
    $result1 = mysqli_query($con,$query1)
    or die(mysqli_error());
    $rows = mysqli_num_rows($result1);
    if($rows==1){
        header("Location:login2.php?msg=$email2");
    }
    else{
        echo $alert1;
    }
}
else
{
 ?> 




<div class="">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p id="st"><img src="../image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
      </div>
      <div class="modal-body" style="background-color: #268454">

      <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  name="email2" id="exampleInputEmail1" aria-describedby="emailHelp" Required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" Required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" Required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-warning position-relative top-50 start-50 translate-middle mt-5">Submit</button>
</form>





  


<?php
 }
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