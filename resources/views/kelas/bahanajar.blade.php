@extends('layouts.layout')
@section('title','Bahan ajar')
@section('content')
<div class="row">
   @foreach ($datasub as $sub)
   <div class="col-lg-3">
      <div class="card">
         <div class="card-body">
            <h3 class="card-title">{{$sub->nama_mapel}}</h3>
            <h6 class="card-subtitle mb-2 text-muted">{{$sub->nama_kelas}}</h6>
            <br>
            <a href="/tambah-data-pelajaran/{{$sub->subkelas_id}}">Tambah data materi pelajaran</a>
         </div>
      </div>
   </div>
   @endforeach
</div>
@endsection