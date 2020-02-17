@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
        <h4>Edit Category Managements</h4>
    </div>
    <div class="card-body">
            @if (session('sukses'))
            <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Successfull!</strong> {{session('sukses')}}
            </div>
            @endif
        <form action="/kategori/{{$data_cat->id}}/update" method="POST">
                {{ csrf_field() }}
            <div class="basic-elements">
                <div class="form-row">
                    <div class="col-md-12">
                            <div class="form-group">
                                    <label for="category_name">Nama Kategori</label>
                                    <input type="text" class="form-control" name="category_name" value="{{$data_cat->category_name}}" autofocus>
                            </div>
                            <div class="form-group">
                                    <label for="category_id">ID Kategori</label>
                                    <input type="text" class="form-control" name="category_id" value="{{$data_cat->category_id}}">
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update item</button>
            </div>
        </form>
    </div>   
</div>
@endsection