<?php
include("connection.php");
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<title {{env('APP_NAME')}}>|REGISTER</title>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <?php include('styles.php') ?>

</head>

<body class="vh-100">
   <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign up</h3>
							<p>Sign in to your account to Apply for Hostel</p>
						</div>
						<form method="post">
							<div class="mb-4">
								<label class="mb-1 text-dark">Matriculation Number</label>
								<input type="text" class="form-control form-control" name="matricno" value="matric no" required>
							</div>
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control form-control" name="email" value="hello@example.com" required>
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="dz-password" name="password" class="form-control" value="13456" required>
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
										<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="./login.php" class="btn-link text-primary">Sign in</a>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" name="register" class="btn btn-primary btn-block">Sign Up</button>
							</div>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="index.html"><img src="images/logo-full.png" class="mb-3 logo-dark" alt=""></a>
							<a href="index.html"><img src="images/logi-white.png" class="mb-3 logo-light" alt=""></a>
							<p>Hostel Allocation Management System FUTA</p>
						</div>
						<div class="login-media text-center">
							<img src="../assets/images/login.png" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>


<?php include('scripts.php') ?>
