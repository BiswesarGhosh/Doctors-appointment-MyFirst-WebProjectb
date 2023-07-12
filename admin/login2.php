<?php
  session_start();
  $con = mysqli_connect("localhost","root","","doctor")
or die("Failed to Connect Server" .mysqli_connect_error());
if(isset($_GET['msg']))
    {
        $message1 = $_GET['msg'];
  
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

  <h1 class="fs-1 text-center bg-success my-auto mt-5">Hello Admin!</h1>




 
  <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header shadow">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel" ><p id="st"><img src="../image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-start flex-grow-1 ">
          <li class="nav-item">
          <a class="nav-link col-md-6 mx-auto my-auto">
    <button type="button" class="btn btn-outline-success ms-5 " data-bs-toggle="modal" data-bs-target="#exampleModall">Add Doctor <i class="fa-solid fa-pen"></i></button></a>
          </li>
          <li class="nav-item">
          <a class="nav-link col-md-6 mx-auto my-auto" href="list_doctor.php">
    <button type="button" class="btn btn-outline-success ms-5 ">Doctors List <i class="fa-solid fa-clipboard-list"></i></button></a>
          </li>
          <li class="nav-item">
          <a class="nav-link col-md-6 mx-auto my-auto" href="list_user.php">
    <button type="button" class="btn btn-outline-success ms-5 ">Booking List <i class="fa-solid fa-clipboard-list"></i></button></a>
          </li>
      </div>
    </div>
  </div>
</nav>




 
<!--ADD DOCTOR START-->




<div class="modal fade" id="exampleModall" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p id="st"><img src="../image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #268454"></button>
      </div>
      <div class="modal-body" style="background-color: #268454">

  <form class="px-4 py-3" action="doctor_pro.php" method="post">
    <input type="hidden" name="id2">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Department</b></label>
      <input type="text" name="depart" class="form-control" id="exampleDropdownFormEmail1" placeholder="Enter Department Name" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label"><b>Doctor</b></label>
      <input type="text" name="doct" class="form-control" id="exampleDropdownFormPassword1" placeholder="Enter Doctor Name" Required>
    </div>
    <div class="mb-3">
      <div class="form-check mt-5">
        <input type="checkbox" class="form-check-input" id="dropdownCheck" Required>
        <label class="form-check-label" for="dropdownCheck">
         <b style="color:white"> Remember me </b>
        </label>
      </div>
    </div>
    <input type="submit" class="btn btn-warning position-relative top-50 start-50 translate-middle mt-5" value="Submit">
  </form>
  <div class="dropdown-divider"></div>
      </div>
    </div>
  </div>
</div>
</form>



<!--ADD DOCTOR END-->


<h6 class="font-monospace">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</h6>


<?php

$alert= "<script>alert('This Records Are Already Exits!');</script>";

if(isset($_GET['msg']))
{
    $message = $_GET['msg'];
    if($message == 6){
     echo $alert;
    }
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