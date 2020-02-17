@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
        <h4>Paket siswa</h4>
        {{-- add item -> #additem --}}
        <a href="#tambahdatapaket">
            <button type="button" class="btn btn-primary btn-flat btn-addon mb-10 ml-5 float-right" data-toggle="modal" data-target="#tambahdatapaket">
            <span class="ti-plus"></span> Tambah Paket Siswa
            </button>
        </a>
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
                                   <th>Nama Paket</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                        @foreach($datapaket as $pkt)
                                        <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$pkt->nama_paket}}</td>
                                        <td colspan="2"><a href="/paket/{{$pkt->paket_id}}/edit" title="Edit paket" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-success" data-toggle="modal"><span class="fas fa-edit" style="font-size:12px;"></span></button></a><a href="/paket/{{$pkt->paket_id}}/delete" title="Hapus paket" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger" data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"></span></button></a></td>
                                        </tr>
                                        @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahdatapaket" tabindex="-1" role="dialog" aria-labelledby="tambahdatapaket" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
     <div class="modal-content">
       <form action="/paket/addnew" method="POST">
           {{ csrf_field() }}
           <div class="modal-header">
                   <h5 class="modal-title" id="tambahdatakelas">Tambah Data Paket Siswa</h5>
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
                                     <label for="kelas">Paket untuk kelas</label>
                                     <input type="text" class="form-control" name="nama_paket" autofocus>
                                     
                                     </select>
                                  </div>
                               </div>
                           </div>
                       </div>
                   </div>
                 </div>
                 <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Tambah Paket Siswa</button>
                 </div>
       </form>
     </div>
   </div>
</div>
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