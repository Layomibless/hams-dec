<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{env('APP_NAME')}} | Admin Login</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="assets/css2?family=Material+Icons" rel="stylesheet">
	<link rel="assets/stylesheet" href="ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="assets/vendor/jvmap/jquery-jvectormap.css" rel="stylesheet">
	<link href="assets/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	
	<!-- tagify-css -->
	<link href="assets/vendor/tagify/dist/tagify.css" rel="stylesheet">
	
	<!-- Style css -->
   <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
   <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Admin Sign In</h3>
						</div>

						@if (session('error'))
							<div class="alert alert-danger" >
								{{ session('error') }}
							</div>
						@endif

						@if (session('success'))
						<div class="alert alert-danger" >
							{{ session('success') }}
						</div>
					@endif

						<form method="post" action="/admin-login" >@csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Email Address</label>
								<input type="email" class="form-control form-control"  name="email" placeholder="RSG/22/9739">
							
								@error('email')
									<i class="text-danger" > {{$message}} </i>
								@enderror
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="dz-password" name="password" class="form-control" placeholder="*******">
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1">
										<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="/register" class="btn-link text-primary">Sign Up</a>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" name= login class="btn btn-primary btn-block">Sign In</button>
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

</body>
</html>