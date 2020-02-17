@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
        <h4>Data sub-pelajaran Siswa</h4>
        {{-- add item -> #additem --}}
        <a href="#tambahdatasub">
            <button type="button" class="btn btn-primary btn-flat btn-addon mb-10 ml-5 float-right" data-toggle="modal" data-target="#tambahdatasub">
            <span class="ti-plus"></span> Tambah sub-pelajaran
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
                                   <th>Judul pelajaran</th>
                                    <th>Kelas</th>
                                    <th>Materi</th>
												<th>Deskripsi materi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$datasub->isEmpty())
                                        @foreach($datasub as $dtsub)
                                        
                                        <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$dtsub->nama_mapel}}</td>
                                        <td>@if($dtsub->kelas_id){{$dtsub->nama_kelas}}@endif</td>
                                        <td>@if($dtsub->kelas_id){{$dtsub->judul_materi}}@endif</td>
													 <td>@if($dtsub->kelas_id){{$dtsub->isi_materi}}@endif</td>
                                        <td colspan="2"><a href="/subpelajaran/{{$dtsub->subkelas_id}}/edit" title="Edit materi pelajaran" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-success" data-toggle="modal"><span class="fas fa-edit" style="font-size:12px;"></span></button></a>&nbsp;<a href="/subpelajaran/{{$dtsub->subkelas_id}}/delete" title="Hapus materi pelajaran" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger" data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"></span></button></a></td>
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
<div class="modal fade" id="tambahdatasub" tabindex="-1" role="dialog" aria-labelledby="tambahdatasub" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
   <div class="modal-content">
      <form action="/subpelajaran/addnew" method="POST">
         {{ csrf_field() }}
         <div class="modal-header">
                  <h5 class="modal-title" id="tambahdatakelas">Tambah Data Sub Pelajaran</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="card-body">
                     <div class="basic-elements">
                           <div class="form-row">
                              <div class="col-md-6">
                                    <label for="kelas">Kelas</label>
                                    <select name="kelas_id" class="form-control">
                                       @foreach($kelasdata as $dtsub)
                                    <option value="{{$dtsub->kelas_id}}">{{$dtsub->nama_kelas}}</option>
                                    @endforeach
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                       <label for="materi">Materi</label>
                                       <select name="materi_id" class="form-control">
                                          @foreach ($materidata as $mat)
                                       <option value="{{$mat->materi_id}}">{{$mat->judul_materi}}</option>
                                          @endforeach
                                       </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                    <label for="nama_mapel">Judul Sub Pelajaran</label>
                                    <input type="text" class="form-control" name="nama_mapel" value="" autofocus>
                              </div>
                              <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah sub-pelajaran</button>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
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