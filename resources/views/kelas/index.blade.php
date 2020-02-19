@extends('layouts.layout')
@section('content')

<div class="container-fluid">
  @if (session('sukses'))
  <div class="alert alert-success alert-dismissible fade show my-2">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">&times;</span></button>
    <strong>Successfull! </strong>{{session('sukses')}}
  </div>
</div>
@endif
<div class="container-fuid">
  <div class="col">
    <div class="card container-fluid">
      <div class="card-title">
        <h4>Data Kelas</h4>
        <a href="#tambahdatakelas">
          <button type="button" class="btn btn-primary btn-flat btn-addon mb-10 ml-5 float-right" data-toggle="modal"
            data-target="#tambahdatakelas">
            <span class="ti-plus"></span> Tambah data kelas
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
                <th>Nama Kelas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if(!$data_kelas->isEmpty())
              @foreach($data_kelas as $dt_kelas)
              <tr>
                <td>{{$dt_kelas->kelas_id}}</td>
                <td>{{$dt_kelas->nama_kelas}}</td>
                <td colspan="2"><a href="/kelas/{{$dt_kelas->kelas_id}}/delete" title="Delete Kelas"
                    data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger"
                      data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"></span></button></a>
                </td>
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
  <div class="col">
    <div class="card">
      <div class="card-title">
        <h4>Materi pelajaran</h4>
        <a href="#tambahdatamateri">
          <button type="button" class="btn btn-primary btn-flat btn-addon mb-10 ml-5 float-right" data-toggle="modal"
            data-target="#tambahdatamateri">
            <span class="ti-plus"></span> Tambah materi pelajaran
          </button>
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="tablel_pelajaran" class="table table-hover" width="100%" cellspacing="0">
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
                <td>@if($dataamateri->kelas_id){{$dataamateri->nama_kelas}}@endif</td>
                <td>{{$dataamateri->judul_materi}}</td>
                <td>{{$dataamateri->isi_materi}}</td>
                <td colspan="2"><a href="/materi/{{$dataamateri->materi_id}}/edit" title="Edit materi pelajaran"
                    data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-success"
                      data-toggle="modal"><span class="fas fa-edit" style="font-size:12px;"></span></button></a>&nbsp;<a
                    href="/materi/{{$dataamateri->materi_id}}/delete" title="Hapus materi pelajaran"
                    data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger"
                      data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"></span></button></a>
                </td>
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
  <div class="col">
    <div class="card">
      <div class="card-title">
        <h4>Data sub-pelajaran Siswa</h4>
        <a href="#tambahdatasub">
          <button type="button" class="btn btn-primary btn-flat btn-addon mb-10 ml-5 float-right" data-toggle="modal"
            data-target="#tambahdatasub">
            <span class="ti-plus"></span> Tambah sub-pelajaran
          </button>
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="tablel_subpel" class="table table-hover" width="100%" cellspacing="0">
            <thead>
              <?php $i=1; ?>
              <tr>
                <th>No.</th>
                <th>Judul sub-pelajaran</th>
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
                <td colspan="2"><a href="/subpelajaran/{{$dtsub->subkelas_id}}/edit" title="Edit materi pelajaran"
                    data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-success"
                      data-toggle="modal"><span class="fas fa-edit" style="font-size:12px;"></span></button></a>&nbsp;<a
                    href="/subpelajaran/{{$dtsub->subkelas_id}}/delete" title="Hapus materi pelajaran"
                    data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger"
                      data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"></span></button></a>
                </td>
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
</div>
</div>
</div>
</div>
<!-- Modal Kelas-->
<div class="modal fade" id="tambahdatakelas" tabindex="-1" role="dialog" aria-labelledby="tambahdatakelas"
  aria-hidden="true">
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
          <button type="submit" class="btn btn-primary">Tambah kelas</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal Kelas --}}
<!-- Modal Materi Pelajaran-->
<div class="modal fade" id="tambahdatamateri" tabindex="-1" role="dialog" aria-labelledby="tambahdatamateri"
  aria-hidden="true">
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
{{-- End Modal Kelas --}}
<!-- Modal Sub Pelajaran-->
<div class="modal fade" id="tambahdatasub" tabindex="-1" role="dialog" aria-labelledby="tambahdatasub"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form action="/subpelajaran/addnew" method="POST" enctype="multipart/form-data">
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
                <div class="col-md-12">
                  <label for="Gambar pelajaran">Features Picture</label>
                  <input type="file" name="img_sub" class="form-control" id="">
                </div>
              </div>
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
                    @foreach ($data_materi as $mat)
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
{{-- End Modal Sub Pelajaran --}}
<script>
  $(document).ready(function () {
    $('#tablel').DataTable({
      scrollY: '50vh',
      searching: false,
      scrollCollapse: true,
      paging: true,
    });
  });
  $(document).ready(function () {
    $('#tablel_pelajaran').DataTable({
      scrollY: '50vh',
      searching: false,
      scrollCollapse: true,
      paging: true,
    });
  });
</script>
<script>
  $(document).ready(function () {
    $('#tablel_subpel').DataTable({
      scrollY: '50vh',
      searching: false,
      scrollCollapse: true,
      paging: true,
    });
  });
</script>
@endsection