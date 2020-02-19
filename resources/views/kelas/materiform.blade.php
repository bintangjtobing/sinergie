@extends('layouts.layout')
@section('title','Tambah data Bahan ajar')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <form action="#" enctype="multipart/form-data">
            <div class="form-group">
               @foreach ($datasub as $sub)
               <small class="muted-text">Mata pelajaran</small>
               <h3>{{$sub->nama_mapel}}</h3>
               @endforeach
            </div>
            <div class="form-group">
               <label for="">Judul bab pelajaran</label>
               <input type="text" name="ba_nama" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Isi materi</label>
               <textarea name="ba_deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
               <label for="">Bahan ajar berbentuk dokumen</label>
               <input type="file" name="ba_file" class="form-control" id="">
            </div>
         </form>
      </div>
   </div>
</div>
@endsection