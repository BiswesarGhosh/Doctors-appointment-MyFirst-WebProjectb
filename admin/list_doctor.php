<?php
    //  require_once("connection.php");
    $con = mysqli_connect("localhost","root","","doctor")
or die("failed to connect mysql server" .mysqli_connect_error());



$alert= "<script>alert('Your Entry Has Been Successsully Submitted!');</script>";
$alert1= "<script>alert('Your Entry Has Been Successsully Edited!');</script>";
$alert2= "<script>alert('Successsully Deleted!');</script>";




     $query = "SELECT * FROM admin_edit";
     $result = mysqli_query($con,$query);
    
     if(isset($_GET['mssg']))
{
    $message3 = $_GET['mssg'];

}
   
   
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--CSS Link-->

        <link rel="stylesheet" href="../style.css">

    <!--FONT AWASOME LINK-->
    <script src="https://kit.fontawesome.com/5a6ef5ad9c.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Doctor's Apointment</title>
</head>

<body>


  

<h1 class="fs-1 text-center bg-success my-auto mt-5">Lists of Doctors & Departments!</h1>



 
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
          <a class="nav-link col-md-6 mx-auto my-auto" href="login2.php">
    <button type="button" class="btn btn-outline-success ms-5 ">Home <i class="fa-solid fa-archway"></i></button></a>
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




<div class="tbl-content col-12">
<table class="table table-striped table-bordered col-lg-12">
  <tr>
    
    <th class="table-warning">Department</th>
    <th class="table-info">Doctors</th>
    <th class="table-danger">Edit</th>
    <th class="table-secondary">Delete</th>
  </tr>
  <?php
          while($row= mysqli_fetch_assoc($result))
           {
               
            $id= $row['id'];
            $depart= $row['department'];
            $doct= $row['doctors'];
       
     ?>
     <tr>
     
         
         <td class="table-info"><?php echo ucfirst($depart) ;?></td>
         <td class="table-info"><?php echo ucfirst($doct) ;?></td>
         <td class="table-info"><a style="color:Green" href="edit.php?GetID=<?php echo $id ?>"><i class="fa-solid fa-pen-nib"></i></td>
         <td class="table-info"><a style="color:red" href="delete.php?Del=<?php echo $id ?>"><i class="fa-solid fa-trash-can"></i></td>
    </tr>
    <?php 
           }
      ?>
      
</table>
        </div>

<?php
if(isset($_GET['msg']))
{
    $message = $_GET['msg'];
    if($message == 5){
     echo $alert;
    }
    if($message == 9){
        echo $alert2;
       }
    if($message == 8){
    echo $alert1;
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