@extends('layouts.layout')
@section('content')
<form action="/item/addnew" method="POST">
   {{ csrf_field() }}
   <div class="modal-header">
           <h5 class="modal-title" id="additem">Add Data Item</h5>
         </div>
         <div class="modal-body">
           <div class="card-body">
               <div class="basic-elements">
                   <div class="row">
                       <div class="col-md-12">
                               <div class="form-group">
                                       <label for="item_name">Nama Item</label>
                                       <input type="text" class="form-control" name="item_name" autofocus>
                               </div>
                               <div class="form-row form-group">
                                   <div class="col">
                                       <label for="item_code">Kode Item</label>
                                       <input type="text" name="item_code" class="form-control">
                                   </div>
                                   <div class="col">
                                    <label for="unit">Satuan Barang</label>
                                    <input type="text" name="unit" class="form-control" id="">
                                   </div>
                               </div>
                               <div class="form-row form-group">
                                <div class="col">
                                    <label for="qty">Jumlah Stok Awal</label>
                                    <input type="text" class="form-control" name="qty">
                                </div>
                                    <div class="col">
                                        <label for="date_in">Tanggal Masuk</label>
                                        <input type="text" name="date_in" class="datepicker-here form-control" data-position="left top" data-language="en">
                                    </div>
                               </div>
                               <div class="form-group">
                                   <label for="description">Keterangan</label>
                                   <input type="text" class="form-control" name="description">
                               </div>
                       </div>
                   </div>
               </div>
           </div>
         </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Add new item</button>
         </div>
</form>
@endsection