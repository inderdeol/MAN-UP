<?
$site_name="Man Up";
session_start();


if (isset($_SESSION["id"])){

  			header("Location:/dashboard");

}
?>

<html lang="en">

<?php 

$site_title ="Sign In" ;
include "includes/db.php";
?>

<?php

if(isset($_POST['signin'])){

	$error=[];

	if(empty($_POST['user'])){

		$error['user']="Please Enter Email or Username";

}

if(empty($_POST['password'])){
	$error['password']="Please enter password";

}else{
	$pass=$_POST['password'];
}



		if(empty($error)){
		$statement = $conn->prepare("SELECT * FROM user WHERE email=:user OR username=:user");
		$statement->bindParam(":user",$_POST['user']);
		$statement->execute();
		$row = $statement->fetch(PDO::FETCH_BOTH);


      if($statement->rowCount() < 1 || !password_verify($pass,$row['pw']) ){
        header("Location:/login?error=Either Email or Password Incorrect");
        $error['failure'] = "Either Email or Password is Incorrect";
		}else{
			$_SESSION["id"] = $row['id'];
			header("Location:/dashboard.php");
		}

	}


}


 ?>


<head>
  <title>
    <?php
    if($site_title === "home"){
    ?>
    <?=$site_name?>
  <?php }else{?>
    <?=$site_name?> | <?=$site_title?>
  <?php }?>

  </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/style/css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(/style/images/bg.jpg);">
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<!-- <h2 class="heading-section">Login #10</h2> -->
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<h3 class="mb-4 text-center">Sign In</h3>
<form class="signin-form" method="post">
	<!-- <input type="text" class="form-control" placeholder="Username" required> -->
	<!-- <label for="">First Name <span style="color:red;">*</span></label> -->
	<!-- <?php if(isset($error['fname'])) {?>
	<label for=""><span style="color:red;"><?=$error['fname']?></span></label>
<?php }?> -->

<?php if(isset($_GET['error'])){?>
<p style="color:red;"><?=$_GET['error']?></p>
<?php }?>

<div class="form-group">
<input type="text" class="form-control" id="" name="user" placeholder="

<?php
if(isset($error['user'])){
	echo $error['user'];
}else{
	echo 'Username / Email';
}
?>

"
 required>
</div>



<!-- <div class="form-group"> -->
	<!-- <input id="password-field" type="password" class="form-control" placeholder="Password" required> -->
	<!-- <label for="">First Name <span style="color:red;">*</span></label> -->
	<!-- <?php if(isset($error['fname'])) {?> -->
	<!-- <label for=""><span style="color:red;"><?=$error['fname']?></span></label> -->
<!-- <?php }?> -->
	<!-- <input id="password-field" type="password" name="pass" class="form-control" placeholder=" -->
	<?php
	// if(isset($error['pass'])){
	// 	echo $error['pass'];
	// }else{
	// 	echo '********';
	// }
	// ?>
	<!-- " -->
	<?php
	// if(isset($_POST['pass'])){
	// 	echo 'value="'.$_POST['pass'].'"';
	// }
	?>
	 <!-- required> -->

<!-- </div> -->



<div class="form-group">
<input id="password-field" type="password" name="password" class="form-control" placeholder="
<?php
if(isset($error['pass'])){
	echo $error['pass'];
}else{
	echo '******';
}
?>

"
 required>

 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>

<div class="form-group">
	<!-- <input id="password-field" type="password" class="form-control" placeholder="Password" required> -->
	<!-- <label for="">First Name <span style="color:red;">*</span></label> -->
	<!-- <?php
	// if(isset($error['fname']))
	{?> -->
	<!-- <label for=""><span style="color:red;"><?=$error['fname']?></span></label> -->
<!-- <?php }?> -->
	<!-- <input id="confpassword-field" type="password" name="confpass" class="form-control" placeholder=" -->
	<?php
	// if(isset($error['confpass'])){
	// 	echo $error['confpass'];
	// }else{
	// 	echo '********';
	// }
	?>
	<!-- " -->
	<?php
	// if(isset($_POST['confpass'])){
	// 	echo 'value="'.$_POST['confpass'].'"';
	// }
	?>
	 <!-- required> -->
<!-- <span toggle="#confpassword-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
<!-- </div> -->




<div class="form-group d-md-flex">
<div class="w-50">
<!-- <label class="checkbox-wrap checkbox-primary">Remember Me
<input type="checkbox" checked> -->
<!-- <div class="form-group form-check">
		<input type="checkbox" name="survey" class="form-check-input" id="exampleCheck1" required>
		<label class="form-check-label checkbox-wrap checkbox-primary" for="exampleCheck1">I Agree to <?=$site_name?>'s <a href="#">Terms and Condition</a>
		</label>
		<span class="checkmark"></span>
</div> -->

</div>
<div class="w-50 text-md-right">
	Have an account? <a href="#" style="color: #fff"> Click here to signin</a>
</div>
</div>

<div class="form-group">
<!-- <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button> -->
<input name="signin" type="submit" class="form-control btn btn-primary submit px-3" value="Sign In"></input>
</div>
</form>
<!-- <p class="w-100 text-center">&mdash; Or <a href="/login">Sign In</a>  &mdash;</p> -->
<!-- <div class="social d-flex text-center">
<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
</div> -->
</div>
</div>
</div>
</div>
</section>
<script src="/style/js/jquery.min.js"></script>
<script src="/style/js/popper.js"></script>
<script src="/style/js/bootstrap.min.js"></script>
<script src="/style/js/main.js"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-20/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 01:43:30 GMT -->
</html>
