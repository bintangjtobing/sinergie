<!doctype html>
<html lang="en">

<head>
   <title>Portal Bimbingan Belajar Sinergie College & Courses</title>

   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="title" content="Portal Bimbingan Belajar Sinergie College & Courses">
   <meta name="description" content="Portal e-learning bimbingan belajar Sinergie College & Courses.">
   <meta name="keywords"
      content="sinergie, college, courses, sinergie colleges, sinergie courses, e-learning sinergie, elearning sinergie, elearning, e-learning, portal siswa sinergie, portal sinergie">
   <meta name="author" content="Bintang Jeremia Tobing">
   <link rel="shortcut icon"
      href="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571123473/icon64_h5xu4m.png')!!}">

   <link href="{!! asset('/css/elearning/stylee.css')!!}" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="{!! asset('css/lib/themify-icons.css')!!}" rel="stylesheet">
</head>

<body>
   {{-- menu --}}
   <div
      class="d-flex flex-column flex-md-row align-items-center px-md-5 mb-3 bg-sinergie border-bottom box-shadow menubig">
      {{-- <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5> --}}
      {{-- <nav class="my-2 my-md-0 mr-md-3">
           <a class="p-2 text-dark" href="#">Features</a>
           <a class="p-2 text-dark" href="#">Enterprise</a>
           <a class="p-2 text-dark" href="#">Support</a>
           <a class="p-2 text-dark" href="#">Pricing</a>
         </nav> --}}
      <img src="{!! asset('/images/elearning/logoelearning250.png')!!}" class="imgmenu" alt="">

   </div>
   <section class="jadwaltryout mb-1 mt-5">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="alert alert-primary" role="alert">
                  Jadwal ujian TRY OUT CPNS T.A. 2019/2020 adalah <span class="datetryout">28 Oktober s/d 10 November
                     2019</span>
               </div>
            </div>
         </div>
      </div>
   </section>
   <hr>

   <section class="subhead">
      <div class="container">
         @if (session('sukses'))
         <div class="alert alert-danger alert-dismissible fade show my-2">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
            {{session('sukses')}}
         </div>
         @endif
         <div class="row">
            <div class="col-sm-6 my-2">
               <h5>Informasi</h5>
               <hr>
               <ul style="list-style-stype:disc;">
                  <li>Setiap siswa/i yang terdaftar di e-learning sinergie college & courses, dapat login dengan email
                     dan password (kata kunci) masing-masing.</li>
                  <li>Apabila siswa belum pernah login sama sekali, dan tidak ingat untuk password yang telah diinput
                     pada saat pertama daftar, silahkan hubungi tim support di <a
                        href="mailto:help@sinergiecollege.com">help@sinergiecollege.com</a></li>
                  <li>Setiap siswa/i yang telah berhasil login ke dalam sistem portal, dianjurkan untuk memperbaharui
                     kata kunci masing-masing untuk menjaga kerahasiaan data setiap siswa/i.</li>
                  <li>Apabila ada masalah, silahkan hubungi <strong>Biro Administrasi Umum Sinergie College &
                        Courses</strong> atau email langsung ke <a
                        href="mailto:help@sinergiecollege.com">help@sinergiecollege.com</a> dengan menyertakan Nomor
                     Siswa dan nama siswa/i yang bersangkutan.</li>
               </ul>
            </div>
            <div class="col-sm-6 text-left my-2">
               <h5>Login</h5>
               <hr>
               <form action="{{route('siswa-login')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="email">Email Siswa</label>
                     <input type="email" name="email" class="form-control loginsiswa"
                        placeholder="Masukkan alamat email kamu:" required autofocus>
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" placeholder="Masukkan password kamu:"
                        class="form-control loginsiswa" required><span toggle="#password-field"
                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
                  <button type="submit" name="submit" class="btn btn-sinergie">Login</button>
               </form>
               <small><a href="#">Lupa password?</a><br>Belum terdaftar di E-Learning Sinergie? <a
                     href="/murid/registrasi">Silahkan daftar disini.</a></small>
            </div>
         </div>
      </div>
   </section>
   <section class="footersec">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6 text-left mr-5">
               <p>&copy; Copyright 2019 - Sinergie College & Courses</p>
            </div>

         </div>
      </div>
   </section>
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src="https://kit.fontawesome.com/ae026c985d.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
   </script>
   <script>
      $(".toggle-password").click(function () {
         $(this).toggleClass("fa-eye fa-eye-slash");
         var input = $($(this).attr("toggle"));
         if (input.attr("type") == "password") {
            input.attr("type", "text");
         } else {
            input.attr("type", "password");
         }
      });
   </script>
</body>

</html>