@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
        <h4>Materi Siswa</h4>
        {{-- add item -> #additem --}}
        <a href="#tambahdatamateri">
            <button type="button" class="btn btn-primary btn-flat btn-addon mb-10 ml-5 float-right" data-toggle="modal" data-target="#tambahdatamateri">
            <span class="ti-plus"></span> Tambah Materi
            </button>
        </a>
	 </div>
    <div class="card-body">
                <div class="table-responsive">
                        <table id="tablel" class="table table-hover" width="100%" cellspacing="0">
                            <thead>
										 <?php $i=1; ?>
                                <tr>
                                   <th>No.</th>
                                   <th>Kelas</th>
												<th>Judul Materi</th>
												<th>Deskripsi Materi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$datamateri->isEmpty())
                                        @foreach($datamateri as $dataamateri)
                                        
                                        <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$dataamateri->nama_kelas}}</td>
													 <td>{{$dataamateri->judul_materi}}</td>
													 <td>{{$dataamateri->isi_materi}}</td>
                                        <td colspan="2"><a href="/materi/{{$dataamateri->materi_id}}/edit" title="Edit materi pelajaran" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-success" data-toggle="modal"><span class="fas fa-edit" style="font-size:12px;"></span></button></a>&nbsp;<a href="/materi/{{$dataamateri->materi_id}}/delete" title="Hapus materi pelajaran" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger" data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"></span></button></a></td>
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
<!-- Modal -->
<div class="modal fade" id="tambahdatamateri" tabindex="-1" role="dialog" aria-labelledby="tambahdatamateri" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
     <div class="modal-content">
       <form action="/materi/addnew" method="POST">
           {{ csrf_field() }}
           <div class="modal-header">
                   <h5 class="modal-title" id="tambahdatakelas">Tambah Data Materi Pelajaran</h5>
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
                                     <label for="kelas">Materi untuk kelas</label>
                                     <select name="kelas_id" class="form-control">
                                        @foreach($kelasdata as $datakls)
                                     <option value="{{$datakls->kelas_id}}">{{$datakls->nama_kelas}}</option>
                                     @endforeach
                                     </select>
                                  </div>
                                       <div class="form-group">
                                               <label for="nama_kelas">Judul Materi Pelajaran</label>
                                               <input type="text" class="form-control" name="judul_materi" autofocus>
                                       </div>
                                       <div class="form-group">
                                          <label for="nama_kelas">Deskripsi Materi</label>
                                          <input type="text" class="form-control" name="isi_materi" autofocus>
                                  </div>
                               </div>
                           </div>
                       </div>
                   </div>
                 </div>
                 <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Tambah Materi</button>
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