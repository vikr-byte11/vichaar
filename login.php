<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | VICHAR</title>


<?php include('./header.php'); ?>
<?php
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
.img_class{
  height: 100%;
  width: 100%;
}

.extra{
  height: 300px;
  width: 400px;
  position: relative;
  top: 180px;
  left: 170px;
}
.space{
  margin: 0;
}
/* .colorClass{
  color: #1fab89;
} */


</style>

<body style="background-color:#1fab89">


<div class="container-fluid space colorClass">
  <div class="row">

    <div class="col-lg-6 col-md-12">
      <img src="assets/dist/img/pic2.jpg" class="img_class" alt="">
    </div>

    <div class="col-lg-6 col-md-12">
      <div class="align-self-center extra">
      <h4 class="text-white text-center"><b>VICHAR</b></h4>
        <div id="login-center" class="row justify-content-center">
          <div class="card col-md-12">
            <div class="card-body">
              <form id="login-form" >
                <div class="form-group">
                  <label for="email" class="control-label text-dark">Email</label>
                  <input type="text" id="email" name="email" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                  <label for="password" class="control-label text-dark">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-sm">
                </div>
                <center>
                <div class="row">
                  <button class="btn-sm btn-block btn-wave col-md-4" style="background-color: #1fab89; color: black; margin-right: 10px; margin-left: 65px;"><a href="./register.php" class="btn" style="height: 5px; margin-bottom:20px;">Register</a></button>
                  <br>
                  <button class="btn-sm btn-block btn-wave col-md-4" style="background-color: #1fab89; height: 45px;">Login</button>
                </div>
              </center> 
              </form>
              
            </div>
          </div>
        </div>
        </div>
    </div>


  </div>
</div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
    
	})
	$('.number').on('input',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9 \,]/, '');
        $(this).val(val)
    })
</script>
</html>
