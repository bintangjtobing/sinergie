@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
        <h4>Data Murid</h4>
        {{-- add item -> #additem --}}
        {{-- <a href="#tambahdatakelas">
            <button type="button" class="btn btn-primary btn-flat btn-addon mb-10 ml-5 float-right" data-toggle="modal" data-target="#tambahdatakelas">
            <span class="ti-plus"></span> Tambah data kelas
            </button>
        </a> --}}
	 </div>
	 @if (session('sukses'))
            <div class="alert alert-success alert-dismissible fade show my-2">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Successfull!</strong> {{session('sukses')}}
            </div>
                  @endif
    <div class="card-body">
                <div class="table-responsive">
                        <table id="tablel" class="table table-hover" width="100%" cellspacing="0">
                            <thead>
										 <?php $i=1; ?>
                                <tr>
											  <th>No.</th>
												<th>Nama Murid</th>
												<th>Email</th>
												<th>Nomor HP</th>
                        <th>Kelas</th>
                        <th>Paket</th>
                        <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$data_murid->isEmpty())
                                        @foreach($data_murid as $dt_murid)
                                        <tr>
													 <td>{{$i++}}</td>
													 <td>{{$dt_murid->nama_murid}}</td>
													 <td>{{$dt_murid->email}}</td>
													 <td>{{$dt_murid->nohp}}</td>
                           <td>{{$dt_murid->kelas}}</td>
                                        <td>{{$dt_murid->paket}}</td>
                                        <td colspan="2">
                                            <a href="/murid/{{$dt_murid->id_murid}}/view" title="Lihat data murid" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-primary"><span class="fas fa-eye" style="font-size:12px;"></span></button></a>
                                        <a href="/murid/{{$dt_murid->id_murid}}/edit" title="Edit data murid" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-success"><span class="fas fa-edit" style="font-size:12px;"></span></button></a>
                                          <a href="/murid/{{$dt_murid->id_murid}}/delete" title="Hapus data Murid" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger" data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"></span></button></a></td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <td colspan="11" class="text-center">No data founded!</td>
                                @endif
                            </tbody>
                        </table>
                </div>
            </div>
    </div>
</div>
{{-- <!-- Modal -->
<div class="modal fade" id="tambahdatakelas" tabindex="-1" role="dialog" aria-labelledby="tambahdatakelas" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
     <div class="modal-content">
       <form action="/kelas/addnew" method="POST">
           {{ csrf_field() }}
           <div class="modal-header">
                   <h5 class="modal-title" id="tambahdatakelas">Tambah Data Kelas</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <div class="card-body">
                       <div class="basic-elements">
                           <div class="row">
                               <div class="col-md-12">
                                       <div class="form-group">
                                               <label for="nama_kelas">Nama Kelas</label>
                                               <input type="text" class="form-control" name="nama_kelas" autofocus>
                                       </div>
                               </div>
                           </div>
                       </div>
                   </div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">Add new item</button>
                 </div>
       </form>
     </div>
   </div>
</div> --}}
<script>
    $(document).ready( function () {
    $('#tablel').DataTable({
      scrollY:        '50vh',
    scrollCollapse: true,
    paging:         true,
    });
} );
</script>
@endsection