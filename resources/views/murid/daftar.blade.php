<!DOCTYPE html>
<html lang="en">
<head>
	<title>SINERGIE E-LEARNING SYSTEM - REGISTRASI MURID</title>
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
	<link rel="stylesheet" type="text/css" href="{!!asset('css/lib/helper.css')!!}">
	<link rel="stylesheet" type="text/css" href="{!!asset('css/lib/themify-icons.css')!!}">
	<link rel="stylesheet" type="text/css" href="{!!asset('css/lib/font-awesome.css')!!}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(https://res.cloudinary.com/starwhisper/image/upload/v1571112499/web/webpublic-min_vc9xta.jpg);">
			
			<div class="login-form">
					@if (session('sukses'))
					<div class="alert alert-success alert-dismissible fade show my-2">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Successfull!</strong> {{session('sukses')}}
					</div>
							@endif
				<h4 class="text-center mb-3"><strong>Daftar sebagai Murid</strong></h4>
				<form action="/murid/registrasiproses" method="POST">
					{{ csrf_field() }}
					 <div class="form-group">
						  <label>Nama Lengkap*</label>
						  <input type="text" name="nama_murid" class="form-control" placeholder="Nama Lengkap">
					 </div>
					 <div class="form-group">
						  <label>Email address*</label>
						  <input type="email" name="email" class="form-control" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					 </div>
					 <div class="form-group">
						  <label>Nomor Handphone*</label>
						  <input type="text" class="form-control" placeholder="contoh: 081262845980" required pattern=".{12,}" name="nohp">
					 </div>
					 <div class="form-group">
						<label>Kelas*</label>
						<select class="form-control" name="kelas">
							@foreach ($data_kelas as $collection)
						<option value="{{$collection->nama_kelas}}">{{$collection->nama_kelas}}</option>
							@endforeach
						</select>
					 </div>
					 <div class="form-group">
							<label>Paket*</label>
							<select class="form-control" name="kelas">
								@foreach ($data_paket as $collection)
							<option value="{{$collection->nama_paket}}">{{$collection->nama_paket}}</option>
								@endforeach
							</select>
						 </div>
					 <div class="form-group">
						 <label>Kata sandi (minimal 6 karakter)</label>
						 <input type="password" name="password" class="form-control" required pattern=".{6,}">
					 </div>
					 <div class="checkbox">
						  <label>
				  <input type="checkbox"> Agree the terms and policy 
			  </label>
					 </div>
					 <button type="submit" class="login100-form-btn mr-2 my-4" name="btn-regist">Register</button>
					 <div class="register-link m-t-15 text-center">
						  <p>Already have account ? <a href="/siswa"> <strong>Sign in</strong></a></p>
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
<script>
$('button[name="btn-regist"]').click(function() {
    if($('input[name="password"]').val().length < 6) {
        alert('Minimum password length = 6');
    } else if {
		if($('input[name="nohp"]').val().length < 12){
			alert('Nomor hp minimal mempunyai 12 angka.');
		} else {
			$('form').submit();
		}
        
    }
});</script>
</body>
</html>