@extends('siswa.dashboard')
@section('title','Setting profil siswa')
@section('kontendash')
<div class="row">
   <div class="col-lg-12 p-r-0 title-margin-right">
       <div class="page-header">
           <div class="page-title">
           <h1>Hi <strong>{{Auth::guard('murid')->user()->nama_murid}}</strong>, sebelum merubah informasi biodata kamu, harap diperiksa kembali datanya ya :)</h1>
           </div>
       </div>
   </div>
</div>
<section id="main-content">
<form action="#" method="POST">
      <div class="form-row">
         <div class="form-group col-md">
            <label for="nama_murid">Nama Lengkap</label>
         <input type="text" class="form-control input-default" name="nama_murid" value="{{$datamurid->nama_murid}}">
         </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md">
            <label for="email">Email</label>
         <input type="text" name="email" class="form-control input-default" value="{{$datamurid->email}}" autofocus>
         </div>
         <div class="form-group col-md">
            <label for="password">Password</label>
         <input type="password" name="password" id="password" value="{{$datamurid->password}}" class="form-control loginsiswa input-default" required><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
         </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md">
            <label for="nohp">No. HP</label>
         <input type="text" name="nohp" class="form-control input-default" value="{{$datamurid->nohp}}">
         </div>
         <div class="form-group col-md">
            <label for="kelas">Kelas yang kamu ambil</label>
         <input type="text" name="kelas" class="form-control input-default" value="{{$datamurid->kelas}}" readonly>
         </div>
         <div class="form-group col-md">
            <label for="paket">Paket yang kamu ambil</label>
         <input type="text" name="paket" class="form-control input-default" value="{{$datamurid->paket}}" readonly>
         </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md">
               <span class="help-block">
                     <small>*Paket dan kelas yang kamu ambil tidak dapat kamu ubah. Silahkan hubungi <strong>Biro Administrasi Umum Sinergie College & Courses</strong> untuk dapat merubah paket dan kelas yang kamu ambil.</small>
                  </span>
         </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md">
            <button type="submit" name="submit" class="btn btn-lg btn-sinergie">Simpan perubahan data</button>
         </div>
      </div>
   </form>
</section>
@endsection