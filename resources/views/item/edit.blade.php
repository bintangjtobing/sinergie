@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
        <h4>Edit Item Managements</h4>
    </div>
    <div class="card-body">
            @if (session('sukses'))
            <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Successfull!</strong> {{session('sukses')}}
            </div>
            @endif
            <form action="/item/{{$data_item->item_id}}/update" method="POST">
                {{ csrf_field() }}
            <div class="basic-elements">
                            <div class="form-row">
                                <div class="col">
                                        <label for="item_name">Nama Item</label>
                                        <input type="text" class="form-control" name="item_name" value="{{$data_item->item_name}}" autofocus>
                                </div>
                                    <div class="col">
                                            <label for="item_code">Kode Item</label>
                                            <input type="text" value="{{$data_item->item_code}}" class="form-control" name="item_code">
                                    </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col">
                                        <label for="price">Jumlah Awal</label>
                                        <input type="text" id="sAwal" class="form-control" value="{{$data_item->qty}}" name="qty" readonly>
                                </div>
                                            <div class="col">
                                                    <label for="created_at">Tanggal Input Data</label>
                                                    <input type="text" class="datepicker-here form-control" data-position="left top" data-language="en" value="{{$data_item->created_at}}" name="created_at" readonly>
                                            </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col">
                                        <label for="date_in">Tanggal Masuk</label>
                                        <input type="text" class="datepicker-here form-control" data-position="right top" data-language="en" value="{{$data_item->date_in}}" name="date_in">
                                </div>
                                            <div class="col">
                                                    <label for="item_in">Jumlah Item Masuk</label>
                                                    <input type="text" id="sIn" class="form-control" value="{{$data_item->item_in}}" name="item_in">
                                            </div>
                            </div>
                            <div class="form-row mt-4">
                                            <div class="col">
                                                    <label for="date_out">Tanggal Keluar</label>
                                                    <input type="text" value="{{$data_item->date_out}}" name="date_out" class="datepicker-here form-control" data-position="right top" data-language="en">
                                            </div>
                                            <div class="col">
                                                    <label for="item_out">Jumlah Item Keluar</label>
                                                    <input type="text" id="sOut" class="form-control" value="{{$data_item->item_out}}" name="item_out">
                                            </div>
                            </div>
                            <div class="form-group mt-4">
                                <label for="total_qty">Jumlah Item Total</label>
                            <input type="text" id="totals" class="form-control" value="{{$data_item->total_qty}}" name="total_qty" readonly>
                            </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update item</button>
            </div>
        </form>
    </div>   
</div>
{{-- <script>
        $(document).ready( function () {
        $('#tablel').DataTable();
    } );
</script> --}}
{{-- HITUNG ITEM MASUK KELUAR DAN SISA ITEM --}}
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

{{-- <script>
     $(document).ready(function(){
        fetch_data();

        function fetch_data()
        {
            $.ajax({
                url:"/item/fetch_data",
                dataType:"json",
                success:function(data)
                {
                    var html = '';
                    html += '<tr>';
                        html += '<td contenteditable id="date_in" class="datepicker-here" data-position="right top" data-language="en"></td>';
                        html += '<td contenteditable id="date_out" class="datepicker-here" data-position="right top" data-language="en"></td>';
                        html += '<td contenteditable id="description"></td>';
                        html += '<td contenteditable id="qty"></td>';
                        html += '<td contenteditable id="item_in"></td>';
                        html += '<td contenteditable id="item_out"></td>';
                        html += '<td contenteditable id="total_qty"></td>';
                        html += '<td><button type="button" class="btn btn-success btn-xs" id="add"><span class="fas fa-plus"></span></button></td></tr>';
                        for(var count=0; count < data.length; count++)
                        {
                            html += '<tr>';
                            html += '<td contenteditable class="column_name" data-column_name="date_in" id="'+data[count].id+'">'+data[count].date_in+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="date_out" id="'+data[count].id+'">'+data[count].date_out+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="description" id="'+data[count].id+'">'+data[count].description+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="qty" id="'+data[count].id+'">'+data[count].qty+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="item_in" id="'+data[count].id+'">'+data[count].item_in+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="item_out" id="'+data[count].id+'">'+data[count].item_out+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="total_qty" id="'+data[count].id+'">'+data[count].total_qty+'</td>';
                            html += '<td><button type="button" class="btn btn-warning btn-xs delete" id="'+data[count].id+'"><span class="fas fa-edit"></span></button> <button type="button" class="btn btn-danger btn-xs delete" id="'+data[count].id+'"><span class="fas fa-trash-alt"></span></button></td></tr>';
                        }
                        $('tbody').html(html);
                }
            })
        }
        var _token =  $('input[name="_token"]').val();
        $(document).on('click','#add', function(){
            var date_in = $('#date_in').text();
            var date_out = $('#date_out').text();
            var description = $('#description').text();
            var qty = $('#qty').text();
            var item_in = $('#item_in').text();
            var item_out = $('#item_out').text();
            var total_qty = $('#total_qty').text();
            if(qty != '' && date_in != '' && item_in != '' && date_out != '' && item_out != ''&& total_qty != '' && description != '' )
            {
                $.ajax({
                    url:"{{ route('item.add_data') }}",
                    method:"POST",
                    data:{qty:qty, date_in:date_in, item_in:item_in, date_out:date_out, item_out:item_out, total_qty:total_qty, description:description, _token:_token},
                    success:function(data)
                    {
                        $('#messages').html(data);
                        fetch_data();
                    }
                });
            }
            else
            {
                $('#messages').html("<div class='alert alert-danger alert-dismissible fade show'>Mohon untuk mengisi semua kolom.</div>");
            }
        });
     });
 </script> --}}
@endsection