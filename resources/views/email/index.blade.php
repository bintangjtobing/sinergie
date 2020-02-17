@extends('layouts.layout')
@section('content')
<div class="card">
      <div class="card-title">
          <h2>Contact Developer</h2>
          <p>Request some features? Report any bug? or anything? Contact developer for find a solutions.</p>
          {{-- add item -> #additem --}}
          
      </div>
      <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                @if (session('sukses'))
                                <div class="alert alert-success alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Successfull !!</strong> {{session('sukses')}}
                                      </div>
                                      @endif
                                <form action="/send" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="name">Your name</label>
                                        <input class="form-control" type="text" name="name" id="name" placeholder="{{auth()->user()->nama_lengkap}}" value="{{auth()->user()->nama_lengkap}}" readonly>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                        <input class="form-control" type="email" name="email" id="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="subject">Subject Pesan:</label>
                                       <select name="subject" class="form-control">
                                          <option value="Request a new features or request for updated features...">Request a new features or request for updated features (Minta untuk fitur baru atau minta untuk perbaikan fitur)</option>
                                          <option value="Report a problem">Report a problem (Laporkan masalah)</option>
                                          <option value="Suggestion an applications">Suggestion an applications (Saran-saran)</option>
                                          <option value="Inquiry - Information">Inquiry - Information (Pertanyaan - Informasi)</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="messages">Pesan kamu:</label>
                                        <textarea name="messages" id="messages" rows="5" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Messages</button>
                                </form>
                            </div>
                            
                        </div>
                        
                    </div>
@endsection