<?php 
$con3 = mysqli_connect("localhost","root","","doctor")
or die("Failed to Connect Server" .mysqli_connect_error());

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
    <div class="wrapper">                 
      
      <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Change Password </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" data-toggle="validator" method="post" name="myForm" id="myForm" onsubmit="return false;" >
                          <input type="hidden" name="block_id" id="block_id" value="<?php echo $row['block_id'];?>"/>   
							 						  
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Current Password </label>
										<input type="password" class="form-control" placeholder="Please Enter Current Password" 
										data-errors="Please Enter Current Password" name="block_password" id="block_password" tabindex="1" required>
									</div>
                                </div> 
                                <div class="col-md-4">
									<div class="form-group">
										<label>New Password </label>
										<input type="password" class="form-control" placeholder="Please Enter New Password" 
										data-errors="Please Enter New Password" name="npsw" id="npsw" tabindex="2" required>
									</div>
                                </div> 
								<div class="col-md-4">
									<div class="form-group">
										<label>Confirm Password </label>
										<input type="password" class="form-control" placeholder="Please Enter Confirm Password" 
										data-errors="Please Enter Confirm Password" name="cpsw" id="cpsw" tabindex="3" required>
									</div>
                                </div>
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2" id="addvtbtn"  >Submit </button>
                            <button type="reset" class="btn btn-danger" id="vrset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
	

    <script language="javascript">
	
	      $(document).ready(function(){  
           $('#myForm').on("submit", function(e){  
		         	e.preventDefault(); //form will not submitted  
					    err = 0 ;
						if($('#block_password').val() == ""){
						  sweetAlert("Oops...", "Please Enter Your Password!", "error");
						  $('#block_password').focus();
						  return false ;
						}else if($('#block_password').val() != ""){
						  $.ajax({
								type:'POST',
								url:'ajax_check_block_pasword.php',
								data:'block_password='+$('#block_password').val(),
								success:function(msg){
									if(msg==0 && msg!="" ){
									   sweetAlert("Oops...", "Current Password Does Not Match!", "error");	 
									   $('#block_password').focus();
									   err = 1;
									   return false ;
  								   }else if($('#npsw').val() == ""){
									  sweetAlert("Oops...", "Please Enter Your New Password!", "error");
									  $('#block_password').focus();
									  return false ;
									}else if($('#cpsw').val() == ""){
									  sweetAlert("Oops...", "Please Enter Your Confirm Password!", "error");
									  $('#block_password').focus();
									  return false ;
									}else if($('#cpsw').val() != $('#npsw').val()){
									  sweetAlert("Oops...", "New Password and Confirm Password Does Not Match!", "error");
									//  $('#password').focus();
									  return false ;
									}else{						
										$.ajax({
											type:'POST',
											url:'update_block_pasword.php',
											data:'block_password='+$('#npsw').val(),
											success:function(msg){
											 if(msg==0){
											   sweetAlert("Oops...", "Something Wrong Happend!", "error");	 											  
											   return false ;
											 }else if(msg==1){	 
											   swal("Success!", "Password Changed Successfully!", "success");
												$("#vrset").click();
											 }						
											  }
											 });						
									}					
							  }
						});								
						}
						
					if(err==0){}
						
						
				   });  
			});  

	</script>
	
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