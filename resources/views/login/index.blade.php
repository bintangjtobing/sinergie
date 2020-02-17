<!DOCTYPE html>
<html lang="en">
<head>
	<title>SINERGIE E-LEARNING SYSTEM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571123473/icon64_h5xu4m.png')!!}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/bootstrap/css/bootstrap.min.css')!!}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="CV Widya Techno Abadi">
  <meta name="keywords" content="steel, widya techno, widya abadi, techno abadi">
  <meta name="author" content="Bintang Cato Jeremia L Tobing">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/animate/animate.css')!!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/css-hamburgers/hamburgers.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/animsition/css/animsition.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/select2/select2.min.css')!!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/daterangepicker/daterangepicker.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('css/util.css')!!}">
	<link rel="stylesheet" type="text/css" href="{!!asset('css/main.css')!!}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(https://res.cloudinary.com/starwhisper/image/upload/v1571112499/web/webpublic-min_vc9xta.jpg);">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
			@if(session('sukses'))
				<div class="alert alert-success" role="alert">BERHASIL! Sekarang kamu sudah menjadi anggota murid dari Bimbel Sinergie</div>
				@elseif(session('gagal'))
				<div class="alert alert-danger" role="alert">{{session('gagal')}}</div>
				@endif
				<form action="/postlogin" method="POST" class="login100-form validate-form p-b-33 p-t-5">
					{{ csrf_field() }}
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn mr-2">
							Login
						</button>
						<a href="https://sinergiecollege.com" class="login100-form-btn"><i class="fas fa-home mr-1"></i> Home</a>
						
					</div>
					

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{!!asset('vendor/jquery/jquery-3.2.1.min.js')!!}"></script>
	<script src="{!!url('https://kit.fontawesome.com/ae026c985d.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/animsition/js/animsition.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/bootstrap/js/popper.js')!!}"></script>
	<script src="{!!asset('vendor/bootstrap/js/bootstrap.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/select2/select2.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/daterangepicker/moment.min.js')!!}"></script>
	<script src="{!!asset('vendor/daterangepicker/daterangepicker.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/countdowntime/countdowntime.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('js/home/main.js')!!}"></script>

</body>
</html>