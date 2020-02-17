@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
    <h4>Item No. <strong>{{$data_item->item_id}}</strong> - <strong>{{$data_item->item_name}}</strong> | Item Details</h4>
        {{-- add item -> #additem --}}
    </div>
    <div class="card-body">
            @if (session('sukses'))
            <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Successfull!</strong> {{session('sukses')}}
                  </div>
                  @endif
                  <div id="messages"></div>
                    
                <form action="/item/{{$data_item->item_id}}/details/save" method="POST">
                  {{ csrf_field() }}
                    <div class="basic-elements">
                        <div class="form-row mt-4">
                            <div class="col">
                                    <label for="item_name">Nama Item</label>
                                    <input type="text" class="form-control" name="item_name" value="{{$data_item->item_name}}">
                            </div>
                                <div class="col">
                                        <label for="item_code">Kode Item</label>
                                        <input type="text" value="{{$data_item->item_code}}" class="form-control" name="item_code">
                                </div>
                        </div>
                        <div class="col-12 text-right">
                            <a title="Save Changes"><button class="btn btn-rounded btn-primary my-2"><span class="fas fa-save" style="font-size:12px;"> Save Changes</span></button></a>
                        </div>
                        
        </div>
                </form>
                <hr>
                <div class="col-12 text-right">
                <a title="Add Data Details Item"><button class="btn btn-rounded btn-success my-2" data-toggle="modal" data-target="#adddataItem"><span class="fas fa-plus" style="font-size:12px;"> Add Details {{$data_item->item_name}}</span></button></a>
                </div>
                      <div class="responsive-table">
                              <table id="tablel" class="table table-hover" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Tanggal Masuk</th>
                                  <th>Item Masuk</th>
                                  <th>Tanggal Keluar</th>
                                  <th>Item Keluar</th>
                                  <th>Item Awal</th>
                                  <th>Jumlah Akhir</th>
                                  <th>Keterangan</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($data_detailitem as $mix)
                                <tr>
                                    <td>{{$mix->details_date_in}}</td>
                                    <td>{{$mix->details_item_in}}</td>
                                    <td>{{$mix->details_date_out}}</td>
                                    <td>{{$mix->details_item_out}}</td>
                                    <td>{{$mix->jmlitem}}</td>
                                    <td>{{$mix->final_item}}</td>
                                <td>{{$mix->descriptions}}</td>
                                    <td><a href="/item/{{$mix->detail_items_id}}/details/delete" title="Delete Item" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger" data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"></span></button></a></td>
                                    
                                </tr>
                                @endforeach
                              </tbody>
                                </table>
                              </div>
          
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="adddataItem" tabindex="-1" role="dialog" aria-labelledby="adddataItem">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title">Add Details Item No. {{$data_item->item_id}} - {{$data_item->item_name}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/item/{{$data_item->item_id}}/details/additem" method="POST">
                <div class="modal-body">
                    {{ csrf_field() }}
                      {{-- TO DO LIST ADD FORM BUTTON TO DETAILS ITEM --}}
                      <div class="basic-elements">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-row form-group">
                              <div class="col">
                                <label for="item_id">Item ID</label>
                              <input type="text" name="item_id" class="form-control" value="{{$data_item->item_id}}" readonly>
                              </div>
                              <div class="col">
                                <label for="qty">Stok Item Awal</label>
                              <input type="text" name="qty" id="sAwal" class="form-control" value="{{$detItem->final_item}}" readonly>
                              </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col">
                                  <label for="details_date_in">Tanggal Masuk</label>
                                  <input type="text" name="details_date_in" class="datepicker-here form-control" data-position="right top" data-language="en" value="">
                                </div>
                                <div class="col">
                                  <label for="details_item_in">Item Masuk</label>
                                  <input type="text" id="sIn" name="details_item_in" class="form-control" value="0">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col">
                                  <label for="details_date_out">Tanggal Keluar</label>
                                  <input type="text" name="details_date_out" class="datepicker-here form-control" data-position="right top" data-language="en" value="">
                                </div>
                                <div class="col">
                                  <label for="details_item_out">Item Keluar</label>
                                  <input type="text" id="sOut" name="details_item_out" class="form-control" value="0">
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="col text-center">
                                        <label for="final_item"><strong>Total Item</strong></label>
                                    <input type="text" name="final_item" id="totals" value="" class="form-control text-center">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <div class="col">
                                        <label for="descriptions">Keterangan</label>
                                        <textarea name="descriptions" cols="30" rows="10" class="form-control"></textarea>
                                      </div>
                                </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add details</button>
                      </div>
                  </div>
    </div>
            </form>
            
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
<script>
    $(document).ready(function(){
        $('#sOut').keyup(function(){
            // AMBIL NILAI AWAL DAN ITEM MASUK
            const stokAwal = document.getElementById('sAwal').value;
            const stokIn = document.getElementById('sIn').value;
            const stokOut = document.getElementById('sOut').value;
            // ARITMATIKA nya
            const total = parseInt(stokAwal) + parseInt(stokIn) - parseInt(stokOut);
            $('#totals').val(total);
        });
        $('#sIn').keyup(function(){
            // AMBIL NILAI AWAL DAN ITEM MASUK
            const stokAwal = document.getElementById('sAwal').value;
            const stokIn = document.getElementById('sIn').value;
            const stokOut = document.getElementById('sOut').value;
            // ARITMATIKA nya
            const total = parseInt(stokAwal) + parseInt(stokIn) - parseInt(stokOut);
            $('#totals').val(total);
        });
    });
</script>
<script>
  $('#example-show-hide-callbacks').datepicker({
language: 'en',
onShow: function(dp, animationCompleted){
if (!animationCompleted) {
 log('start showing')
} else {
 log('finished showing')
}
},
onHide: function(dp, animationCompleted){
if (!animationCompleted) {
 log('start hiding')
} else {
 log('finished hiding')
}
}
})
</script>
@endsection