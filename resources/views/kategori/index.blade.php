@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-title">
        <h4>Category Managements</h4>
        <a href="#addkategori">
            <button type="button" class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5" data-toggle="modal" data-target="#addkategori">
            <i class="ti-plus"></i> Add Data Category
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
            <div class="table-responsive">
                    <table id="tablel" class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @if(!$data_cat->isEmpty())
                                    @foreach($data_cat as $dt_cat)
                                    <tr>
                                    <th scope="row">{{$dt_cat->id}}</th>
                                    <td>{{$dt_cat->category_name}}</td>
                                    <td><a href="#modalPurchase"><button class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#modalPurchase">Edit</button></a> <a href="#modalPurchase"><button class="btn btn-rounded btn-danger" data-toggle="modal" data-target="#modalPurchase">Delete</button></a></td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <td colspan="3" class="text-center">No data founded!</td>
                                
                            @endif
                        </tbody>
                    </table>
                </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addkategori" tabindex="-1" role="dialog" aria-labelledby="addkategori" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <form action="/kategori/addnew" method="POST">
                {{ csrf_field() }}
                <div class="modal-header">
                        <h5 class="modal-title" id="addkategori">Add Data Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="card-body">
                            <div class="basic-elements">
                                <div class="form-row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="category_name">Nama Kategori</label>
                                                    <input type="text" class="form-control" name="category_name" autofocus>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_id">ID Kategori</label>
                                        <input type="text" class="form-control" name="category_id" value="" placeholder="SWCAT-0000">
                                        <small class="form-text text-muted">*Awali dengan SWCAT-</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add new category</button>
                      </div>
            </form>
          </div>
        </div>
</div>
@endsection