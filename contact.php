
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


 

    <!--SIGIN END-->

    <!--NAV START-->
  

    <!--NAV END-->

    <!--HOME START-->


    
    <div  class="row">


<img src="./image/book-img.svg" class="col-sm-6" alt="....">
<div class="col-sm-6 my-auto">
<h2 class="fs-2 text-center border p-3" id="book1">Contact Us</h2>
    <form action="contact_pro.php" method="post" class="border p-4">
     <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label fw-bolder">Enter Your Name*</label>
      <input type="text" name="name3" class="form-control shadow bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Your Name" value="<?php //echo  $Fname .$Lname;?>" Required>
</div>

<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Phone Numer*</label>
     <input type="phone"  name="mob3" class="form-control shadow bg-body rounded" id="exampleInputPassword1" placeholder=" Enter Your Phone" value="<?php //echo  $mob;?>" Required>
</div>
<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Email*</label>
     <input type="email" name="email3" class="form-control shadow bg-body rounded" id="exampleInputPassword1" placeholder=" Enter Your Email" value="<?php //echo  $email;?>" Required>
</div>
<div class="mb-3">
     <label for="exampleInputPassword1" class="form-label fw-bolder">Message*</label>
     <textarea name="msg3" class="form-control shadow bg-body rounded" id="exampleInputPassword1" placeholder="Enter your Message" Required></textarea>
</div>







<div class="mb-3 form-check">
     <input type="checkbox" class="form-check-input" id="exampleCheck1" Required>
     <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
  <input type="submit" value="Send" class="btn btn-outline-warning text-center position-relative top-50 start-50 translate-middle mt-5">
  </form>
</div>


</div>



<!--REVIEW END-->




<?php

$alert= "<script>alert('You Send Your Message Successfully!');</script>";

if(isset($_GET['msg']))
{
    $message = $_GET['msg'];
    if($message == 3){
     echo $alert;
    }
}
?>









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
