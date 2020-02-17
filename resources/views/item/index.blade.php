@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
        <h4>Item Managements</h4>
        {{-- add item -> #additem --}}
        <a href="/additem">
            <button type="button" class="btn btn-primary btn-flat btn-addon mb-10 ml-5">
            <span class="ti-plus"></span> Add Data Item
            </button>
        </a>
    </div>
    <div class="card-body">
            @if (session('sukses'))
            <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Successfull!</strong> {{session('sukses')}}
            </div>
                  @endif
            <div id="messages"></div>
                <div class="table-responsive">
                        <table id="tablel" class="table table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Item</th>
                                    <th>Kode Item</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Saldo Awal</th>
                                    <th>Jumlah Masuk</th>
                                    <th>Jumlah Keluar</th>
                                    <th>Total Item</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$latestdata->isEmpty())
                                        @foreach($latestdata as $dt_item)
                                        <tr>
                                        <td><a href="/item/{{$dt_item->item_id}}/details" title="View Details Item" data-toggle="tooltip" data-placement="top">{{$dt_item->item_name}}</a></td>
                                        <td><span class="badge badge-primary">{{$dt_item->item_code}}</span></td>
                                        <td>{{$dt_item->details_date_in}}</td>
                                        <td>{{$dt_item->qty}} {{$dt_item->unit}}</td>
                                        <td>{{$dt_item->details_item_in}}</td>
                                        <td>{{$dt_item->details_date_out}}</td>
                                        <td>{{$dt_item->details_item_out}}</td>
                                        <td>{{$dt_item->final_item}}</td>
                                        <td colspan="2"><a href="/item/{{$dt_item->item_id}}/details" title="View Details Item" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-success" data-toggle="modal"><span class="fas fa-search" style="font-size:12px;"> View Details</span></button></a>  <a href="/item/{{$dt_item->item_id}}/delete" title="Delete Item" data-toggle="tooltip" data-placement="top"><button class="btn btn-rounded btn-danger" data-toggle="modal"><span class="fas fa-trash-alt" style="font-size:12px;"> Delete Item</span></button></a></td>
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