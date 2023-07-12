
<?php

$alert1= "<script>alert('Incorrect userid and password!');</script>";

$con = mysqli_connect("localhost","root","","doctor")
or die ("Failed to connect server" .mysqli_connect_error());
session_start();
if(isset($_POST['email1'])){
     $email1 = stripcslashes($_REQUEST['email1']);
    $email1 = mysqli_real_escape_string($con,$email1);
    $pass1 =  stripcslashes($_REQUEST['pass1']);
    $pass1 = mysqli_real_escape_string($con,$pass1);
    // $id2 = stripcslashes($_REQUEST['id2']);
    // $id2 = mysqli_real_escape_string($con,$id2);
    $query1 = "SELECT * FROM user_register WHERE Email = '$email1' AND Password = '$pass1'";
    $result1 = mysqli_query($con,$query1)
    or die(mysqli_error());
    $rows = mysqli_num_rows($result1);
    if($rows==1){
        header("Location:login.php?msg=$email1");
    }
    else{
        echo $alert1;
    }
}

   ?> 

    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--Internal CSS-->
    <link rel="stylesheet" href="style.css">
    <!--Font AWasome LInk-->
    <script src="https://kit.fontawesome.com/5a6ef5ad9c.js" crossorigin="anonymous"></script>
    <title>Doctor's Appointment</title>
    <!--JQURY LINK-->
    <script src="./js/jquery.min.js"> </script>	
    <!--OWL LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--js link-->
    <script src="main.js"></script>
</head>
  <body>

  
   <!--SIGIN START-->
    <button type="button" class="btn btn-outline-success float-end position-relative me-5 " data-bs-toggle="modal" data-bs-target="#exampleModal">SIGN-IN<i class="bi bi-person-circle mx-2 w-50 "></i></button>
    
    <!--Header Section-->

    <p id="st"><img src="./image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p>


<!--login form-->



    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p id="st"><img src="./image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #268454"></button>
      </div>
      <div class="modal-body" style="background-color: #268454">

  <form class="px-4 py-3" action="" method="post">
    <input type="hidden" name="id" value="">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Email address</b></label>
      <input type="email" name="email1" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label"><b>Password</b></label>
      <input type="password" name="pass1" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" Required>
    </div>
    <div class="mb-3">
      <div class="form-check mt-5">
        <input type="checkbox" class="form-check-input" id="dropdownCheck" Required>
        <label class="form-check-label" for="dropdownCheck">
         <b style="color:white"> Remember me </b>
        </label>
      </div>
    </div>
    <input type="submit" class="btn btn-warning position-relative top-50 start-50 translate-middle mt-5" value="Sign In">
  </form>
  <div class="dropdown-divider"></div>
  <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color:white">
  New around here? Sign up
</button>
      </div>
    </div>
  </div>
</div>
</form>






<!--register modal start-->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p id="st"><img src="./image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #268454"></button>
      </div>
      <div class="modal-body" style="background-color: #268454">

  <form class="px-4 py-3" action="registration.php" method="post">
    <input type="hidden" name="id">
  <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>First Name</b></label>
      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="First name" name="fname" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Last Name</b></label>
      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Last name" name="lname" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Gardain's Name</b></label>
      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Gardain's name"  name="gname" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Date of Birth(DOB)</b></label>
      <input type="date" class="form-control" id="exampleDropdownFormEmail1" Required  name="dob">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Address</b></label>
      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Full Address" name="add" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Email address</b></label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" name="email" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label"><b>Password</b></label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="pass" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Mobile</b></label>
      <input type="number" class="form-control" id="exampleDropdownFormEmail1" placeholder="Mobile" name="mob" Required>
    </div>
    <div class="mb-3">
      <div class="form-check mt-5">
        <input type="checkbox" class="form-check-input" id="dropdownCheck" Required>
        <label class="form-check-label" for="dropdownCheck">
         <b style="color:white"> Remember me </b>
        </label>
      </div>
    </div>
    <input value="Sign Up" type="submit" class="btn btn-warning position-relative top-50 start-50 translate-middle mt-5">
  </form>
  <div class="dropdown-divider"></div>
      </div>
    </div>
  </div>
</div>
</form>



<?php

$alert= "<script>alert('Your Entry Has Been Successsully Submitted!');</script>";

$alert0= "<script>alert('You Have Already Registerd!');</script>";

if(isset($_GET['msg']))
{
    $message = $_GET['msg'];
    if($message == 1){
     echo $alert;
    }
    else{
    echo $alert0;
    }
    
}
?>

<!--register modal end-->



 
<!--forgot pass modal start-->
<!-- 
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p id="st"><img src="./image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #268454"></button>
      </div>
      <div class="modal-body" style="background-color: #268454">

  <form class="px-4 py-3">
  <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>First Name</b></label>
      <input type="text" class="form-control" name="fname2" id="exampleDropdownFormEmail1" placeholder="First name" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Last Name</b></label>
      <input type="text" class="form-control" name="lname2" id="exampleDropdownFormEmail1" placeholder="Last name" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Date of Birth(DOB)</b></label>
      <input type="date" class="form-control" name="dob2" id="exampleDropdownFormEmail1"  Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Email address</b></label>
      <input type="email" class="form-control" name="email2" id="exampleDropdownFormEmail1" placeholder="email@example.com" Required>
    </div>

    <input value="Go" type="submit" class="btn btn-warning position-relative top-50 start-50 translate-middle mt-5" data-bs-toggle="" data-bs-target="">
  <div class="dropdown-divider"></div>
      </div>
    </div>
  </div>
</div>
</form>


<?php
/*
$alert1= "<script>alert('Incorrect Data!');</script>";

$con2 = mysqli_connect("localhost","root","","doctor")
or die ("Failed to connect server" .mysqli_connect_error());
if(isset($_POST['fname2'])){
    $fname2 = stripcslashes($_REQUEST['fname2']);
    $fname2 = mysqli_real_escape_string($con2,$fname2);
    $lname2 = stripcslashes($_REQUEST['lname2']);
    $lname2 = mysqli_real_escape_string($con2,$lname2);
    $dob2 = stripcslashes($_REQUEST['dob2']);
    $dob2 = mysqli_real_escape_string($con2,$dob2);
    $email2 = stripcslashes($_REQUEST['email2']);
    $email2 = mysqli_real_escape_string($con2,$email2);
    $query2 = "SELECT * FROM user_register WHERE First_name ='$fname2' AND Last_name = '$lname2' AND DOB = '$dob2' AND Email = '$email2'";
    $result2 = mysqli_query($con,$query2)
    or die(mysqli_error());
    $rows = mysqli_num_rows($result2);
    if($rows==1){
        header("Location:#staticBackdrop2");
    }
    else{
        echo $alert1;
    }
}
else
{
    */?> -->

<!--forgot pass modal end-->




<!--NEw PASs modal start-->

<!--<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p id="st"><img src="./image/Icon.png" alt="This is a icon"> <b>Medi Care</b></p></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #268454"></button>
      </div>
      <div class="modal-body" style="background-color: #268454">

  <form class="px-4 py-3" action="index.php">
  <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Create new Password</b></label>
      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="First name" Required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label"><b>Confirm Password</b></label>
      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Last name" Required>
    </div>
    <div class="mb-3">
      <div class="form-check mt-5">
        <input type="checkbox" class="form-check-input" id="dropdownCheck" Required>
        <label class="form-check-label" for="dropdownCheck">
         <b style="color:white"> Remember me </b>
        </label>
      </div>
    </div>

    <input value="Save" type="submit" class="btn btn-warning position-relative top-50 start-50 translate-middle mt-5">
  <div class="dropdown-divider"></div>
      </div>
    </div>
  </div>
</div>
</form>-->

<?php
//}
?> 


<!--NEW PASS modal end-->
 

    <!--SIGIN END-->

    <!--NAV START-->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="background-color: #268454">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="shadow collapse navbar-collapse nv gap-3" id="navbarNav" style="background-color: #268454">
      <ul class="navbar-nav mx-5">
        <li class="nav-item py-2 ">
          <a class="nav-link" aria-current="page" href="#">Home <i class="fa-solid fa-house-chimney"></i></a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link" href="#about1">About Us <i class="fa-solid fa-user-group"></i></a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link" href="#service1">Services <i class="fa-brands fa-hive"></i></a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link" href="#doctor">Doctors <i class="fa-solid fa-stethoscope"></i></a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link" href="#rview">Review <i class="fa-solid fa-receipt"></i></a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="book()">Booking <i class="fa-solid fa-pen-clip"></i></a>
        </li>
        <li class="nav-item py-2">
          <a class="nav-link" href="contact.php">Contact Us <i class="fa-solid fa-address-book"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<script>
  function book(){
    alert("Please Sign In First!");
  }
</script>

    <!--NAV END-->

    <!--HOME START-->



    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner mx-auto"  style="width:90rem; height:40rem">
    <div class="carousel-item active">
      <img src="./image/blog-1.jpg" style="width:100%" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/blog-2.jpg" style="width:100%" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/blog-3.jpg" style="width:100%" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






    <div  class="row">
      <img src="./image/home-img.svg" class="col-sm-6" alt="....">
      <div class="col-sm-6 my-auto">
      <h2 class="fw-bolder fs-2 text-center shadow" id="txt" style="font-family: Leelawadee"><span class="fs-1" style="color:#268454">S</span>TAY <span class="fs-1" style="color:#268454">A</span>T <span class="fs-1" style="color:#268454">H</span>OME <span class="fs-1" style="color:#268454">S</span>TAY <span class="fs-1" style="color:#268454">S</span>AFE</h2> 
      <p class="fw-light mt-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <a href="contact.php" id="button"><button type="button" class="btn btn-outline-success mt-5 ms-5" >Contact Us ></button></a>
    </div>
    </div>


    <div class="row gap-2 text-center">
      <div class="col-md-2 border border-success mx-auto p-4 position-relative gap-2" id="doc">
        <i class="fa-solid fa-user-doctor fs-1"></i>
        <h1 class="position-relative text-center sha">200+</h1>
        <h5 class="fs-5">Doctors At Work</h5>
      </div>
      <div class="col-md-2 border border-success mx-auto p-4" id="doc">
        <i class="fa-solid fa-users fs-1"></i>
      <h1 class="position-relative text-center sha">2000+</h1>
      <h5 class="fs-5">Satisfied Patients</h5>
      </div>
      <div class="col-md-2 border border-success mx-auto p-4" id="doc">
      <i class="fa-solid fa-bed-pulse fs-1"></i>
      <h1 class="position-relative text-center sha">700+</h1>
      <h5 class="fs-5">Bed Facilities</h5>
      </div>
      <div class="col-md-2 border border-success mx-auto p-4" id="doc">
      <i class="fa-solid fa-hospital fs-1"></i>
      <h1 class="position-relative text-center sha">120+</h1>
      <h5 class="fs-5">Hospitals</h5>
      </div>
    </div>

    <!--HOME END-->





    <!--ABOUT US START-->

    <br id="about1"><br><br><br><br><br>
     <h1 id="about" class="fs-1 mt-4 text-center fw-bolder shadow"><span style="color: #268454">ABOUT</span> US</h1>
    
    

    <div class="row">
      <img class="col-md-6" src="./image/about-img.svg" alt="...">
      <div class="col-md-6 my-auto">
      <h2 class="fs-1"><span style="color:#268454">We</span> Take <span style="color:#268454">Care</span> Of <span style="color:#268454">Your</span> Healthy <span style="color:#268454">Life</span></h2>
      <p class="mt-5 fs-5 fw-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        <span class="mb-5 fs-5 fw-light collapse" id="collapseExample">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>
      <a class="btn btn-outline-success mt-5 ms-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Read More >
  </a>  
    </div>
   </div>
     <!--ABOUT US END-->




     <!--SERVICE START-->
     <br id="service1" ><br>


     <h1 id="service" class="fs-1 mt-4 text-center mb-5 fw-bolder my-auto shadow"><span style="color: #268454">OUR</span> SERVICES</h1>

      
     <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">  

    <div class="card col-md-4 mx-auto gap-2" style="width: 18rem;" id="dac1">
  <img src="./image/doc-4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">Expert Doctors</h3>
    <p class="card-text mb-5 fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    <span class="mb-5 fs-5 fw-light collapse" id="collapseExample1">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span> </p>
    </p>
    <a class="btn btn-outline-warning ms-5" id="butn" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample" onclick=" myfunction()">
         See More >
      </a> 
  </div>
</div>

<div class="card col-md-4  mx-auto gap-2" style="width: 18rem;" id="dac1">
  <img src="./image/ambulance.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">24/7 Ambulance</h3>
    <p class="card-text mb-5 fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    <span class="mb-5 fs-5 fw-light collapse" id="collapseExample2">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span> </p>
    </p>
    <a class="btn btn-outline-warning ms-5" id="butn" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample" onclick=" myfunction()">
         See More >
      </a> 
  </div>
</div>


<div class="card col-md-4 mx-auto gap-2" style="width: 18rem;" id="dac1">
  <img src="./image/medicine.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Approved Medicines</h3>
    <p class="card-text mb-5 fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    <span class="mb-5 fs-5 fw-light collapse" id="collapseExample3">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span> </p>
    </p>
    <a class="btn btn-outline-warning ms-5" id="butn" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample" onclick=" myfunction()">
         See More >
      </a> 
  </div>
</div>


<div class="card col-md-4 mx-auto gap-2" style="width: 18rem;" id="dac1">
  <img src="./image/hospital_bed.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Best Bed Facility</h3>
    <p class="card-text mb-5 fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    <span class="mb-5 fs-5 fw-light collapse" id="collapseExample4">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span> </p>
    </p>
    <a class="btn btn-outline-warning ms-5" id="butn" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample" onclick=" myfunction()">
         See More >
      </a> 
  </div>
</div>


<div class="card col-md-4 gap-2 mx-auto" style="width: 18rem;" id="dac1">
  <img src="./image/health-care.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Total Care</h3>
    <p class="card-text mb-5 fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    <span class="mb-5 fs-5 fw-light collapse" id="collapseExample5">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span> </p>
    </p>
    <a class="btn btn-outline-warning ms-5" id="butn" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="abc(this)">
         See More >
      </a> 
  </div>
</div>

</div>


<script>
function abc(obj) {

  if(obj.innerHTML == "See More >"){
    obj.innerHTML = "See Less >"
  }
  return;
}

   
</script>   


     <!--SERVICE END-->





    <!--DOCTORS START-->
     
     <br id="doctor"><br><br><br><br>
    <h1 id="about" class="fs-1 mt-4 text-center mb-5 fw-bolder my-auto shadow"><span style="color: #268454">OUR</span> DOCTORS</h1>

    <div class="container">
  <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
    <div class="col">
      <div class="p-3 border bg-light" id="icon1">
        <img style="width: 18rem;" class="rounded mx-auto d-block img-thumbnail" src="./image/doc-1.jpg" alt="...">
        <h3 class="text-center m-2">Aarti Sinha</h3>
        <p class="fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <div class="text-center">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-f fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.twitter.com"><i class="fab fa-twitter fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.skype.com"><i class="fab fa-skype fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light" id="icon1">
      <img style="width: 18rem;" class="rounded mx-auto d-block img-thumbnail" src="./image/doc-2.jpg" alt="...">
        <h3 class="text-center m-2">Suraj Yadav</h3>
        <p class="fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <div class="text-center">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-f fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon" id="icon" id="icon" id="icon" id="icon" id="icon" id="icon" id="icon" id="icon" id="icon"></i></a>
        <a href="https://www.twitter.com"><i class="fab fa-twitter fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.skype.com"><i class="fab fa-skype fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light" id="icon1">
      <img style="width: 18rem;" class="rounded mx-auto d-block img-thumbnail" src="./image/doc-3.jpg" alt="...">
        <h3 class="text-center m-2">Bikash Dutta</h3>
        <p class="fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <div class="text-center">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-f fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.twitter.com"><i class="fab fa-twitter fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.skype.com"><i class="fab fa-skype fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light" id="icon1">
      <img style="width: 18rem;" class="rounded mx-auto d-block img-thumbnail" src="./image/doc-4.jpg" alt="...">
        <h3 class="text-center m-2">Prakash Dubey</h3>
        <p class="fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <div class="text-center">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-f fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.twitter.com"><i class="fab fa-twitter fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.skype.com"><i class="fab fa-skype fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light" id="icon1">
      <img style="width: 18rem;" class="rounded mx-auto d-block img-thumbnail" src="./image/doc-5.jpg" alt="...">
        <h3 class="text-center m-2">Dipesh Gupta</h3>
        <p class="fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <div class="text-center">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-f fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.twitter.com"><i class="fab fa-twitter fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.skype.com"><i class="fab fa-skype fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light" id="icon1">
      <img style="width: 18rem;" class="rounded mx-auto d-block img-thumbnail" src="./image/doc-6.jpg" alt="...">
        <h3 class="text-center m-2">Himanshu Das</h3>
        <p class="fs-5 fw-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <div class="text-center">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-f fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.twitter.com"><i class="fab fa-twitter fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        <a href="https://www.skype.com"><i class="fab fa-skype fs-1 border p-2 px-3 row-cols-1 row-cols-lg-3 g-2 g-lg-3" id="icon"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
     </section>



<!--DOCTORS END-->

  



<!--REVIEW START-->

<br id="rview"><br><br><br><br>
    <h1 id="about" class="fs-1 mt-4 text-center mb-5 fw-bolder my-auto shadow"><span style="color: #268454">Top</span> Reviews</h1>


    <section id="scrollspyHeading3" class="feature">
      
      <div class="owl-carousel owl-theme text-center">

        <div class="item border" id="caro">
         <div style="background-color:#268454" id="caro1">
         <img class="rounded mx-auto" style="width: 8rem;" src="./image/pic-1.png">
          <h3 class="my-auto">John Doe</h3>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br><br>
         </div>       
          <p class="fw-light font-monospace my-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>       
        </div>

        <div class="item border" id="caro">
         <div style="background-color:#268454" id="caro1">
         <img class="rounded mx-auto d-block" style="width: 8rem;" src="./image/pic-2.png">
          <h3 class="my-auto">Suzzy McDubby</h3>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><br><br>
         </div>     
          <p class="fw-light font-monospace my-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>       
        </div>

        <div class="item border" id="caro">
         <div style="background-color:#268454" id="caro1">
         <img class="rounded mx-auto d-block" style="width: 8rem;" src="./image/pic-3.png">
          <h3 class="my-auto">Aaron Hells</h3>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><br><br>
         </div>       
          <p class="fw-light font-monospace my-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>       
        </div>

        <div class="item border" id="caro">
         <div style="background-color:#268454" id="caro1">
         <img class="rounded mx-auto d-block" style="width: 8rem;" src="./image/pic-4.jpg">
          <h3 class="my-auto">Charlie Morgan</h3>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><br><br>
         </div>      
          <p class="fw-light font-monospace my-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>       
        </div>

        <div class="item border" id="caro">
         <div style="background-color:#268454" id="caro1">
         <img class="rounded mx-auto d-block" style="width: 8rem;" src="./image/pic-5.jpg">
          <h3 class="my-auto">La D Passo</h3>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><br><br>
         </div>      
          <p class="fw-light font-monospace my-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>       
        </div>

        <div class="item border" id="caro">
         <div style="background-color:#268454" id="caro1">
         <img class="rounded mx-auto d-block" style="width: 8rem;" src="./image/pic-6.jfif">
          <h3 class="my-auto">Emely Yen</h3>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><br><br>
         </div>       
          <p class="fw-light font-monospace my-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>       
        </div>

        <div class="item border" id="caro">
         <div style="background-color:#268454" id="caro1">
         <img class="rounded mx-auto d-block" style="width: 8rem;" src="./image/pic-7.jpg">
          <h3 class="my-auto">Harry Busan</h3>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><br><br>
         </div>      
          <p class="fw-light font-monospace my-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>       
        </div>

     </div>


    </section>
    

<!--REVIEW END-->













<!--FOOTER START-->


<footer class="row mx-auto my-auto mt-5 border">




<div class="container mx-auto">
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
    <div class="col">
      <div class="p-3 bg-light fs-2 fw-bolder text-center" id="foot1">Quick Links</div>
      <i class="fas fa-angle-right me-4 ms-5"></i> Home <br>
      <i class="fas fa-angle-right me-4 ms-5"></i> About Us<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Services<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Doctors<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Reviews<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Booking<br>
    </div>
    <div class="col">
     <div class="p-3 bg-light fs-2 fw-bolder text-center" id="foot1">Services</div>
      <i class="fas fa-angle-right me-4 ms-5"></i> Dental Care<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Cardiology<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Diagnosis<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Neurology<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Gynocology<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> E-N_T<br>
      <i class="fas fa-angle-right me-4 ms-5"></i> Ambulance<br>
    </div>
    <div class="col">
    <div class="p-3 bg-light fs-2 fw-bolder text-center" id="foot1">Contact Info</div>
      <i class="fas fa-phone me-3 ms-5"></i> 030-1134-22022<br><br>
      <i class="fas fa-mobile-alt me-3 ms-5"></i> 9382-117-0340<br><br>
      <i class="fas fa-envelope me-3 ms-5"></i> medicarebwn@gmail.com<br><br>
      <i class="fas fa-map-marker-alt me-3 ms-5"></i> Kolkata, West Bengal -7003102<br><br>
    </div>
    <div class="col">
    <div class="p-3 bg-light fs-2 fw-bolder text-center" id="foot1">Follow Us</div>
      <i class="fab fa-facebook-f me-3 ms-5 fs-3"></i> <a href="https://www.facebook.com" class="fs-5" id="foot2">Facebook</a><br><br>
      <i class="fab fa-instagram me-3 ms-5 fs-3"></i> <a href="https://www.instagram.com" class="fs-5" id="foot2">Instagram</a><br><br>
      <i class="fab fa-twitter me-3 ms-5 fs-3"></i>  <a href="https://www.twitter.com" class="fs-5" id="foot2">Twitter</a><br><br>
      <i class="fab fa-whatsapp me-3 ms-5 fs-3"></i> <a href="https://www.Whatsapp.com" class="fs-5" id="foot2">Whatsapp</a><br><br>
      <i class="fab fa-linkedin me-3 ms-5 fs-3"></i>  <a href="https://www.linkedin.com" class="fs-5" id="foot2">Linkedin</a><br><br>
    </div>
  </div>
</div>


<hr>
<p class="text-center fs-6">Create By<span style="color:green"> @Biswesar Ghosh </span>| All Rights Reserved &copy_2022</p>



</footer>

<!--FOOTER END-->




 






































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--owl cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $('.owl-carousel').owlCarousel({
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:false,
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    

  </body>
</html>
