@extends('siswa.dashboard')
@section('title','Dashboard pelajaran siswa')
@section('kontendash')
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Hi <strong>{{Auth::guard('murid')->user()->nama_murid}}</strong>, mau belajar apa hari ini?</h1>
            </div>
        </div>
    </div>
</div>
<!-- /# row -->
<section id="main-content">
    <div class="row">
        <div class="col-lg-3">
            <a href="#">
                <div class="card">
                    <img src="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571902417/mm_i7xhjj.jpg')!!}"
                        alt="" class="card-img-top">
                    <h5 class="card-title pt-3">Mathematics</h5>
                    <p class="card-text">14 Topics &nbsp; &nbsp;56 Sessions</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="#">
                <div class="card">
                    <img src="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571902417/mm_i7xhjj.jpg')!!}"
                        alt="" class="card-img-top">
                    <h5 class="card-title pt-3">Mathematics</h5>
                    <p class="card-text">14 Topics &nbsp; &nbsp;56 Sessions</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="#">
                <div class="card">
                    <img src="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571902417/mm_i7xhjj.jpg')!!}"
                        alt="" class="card-img-top">
                    <h5 class="card-title pt-3">Mathematics</h5>
                    <p class="card-text">14 Topics &nbsp; &nbsp;56 Sessions</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="#">
                <div class="card">
                    <img src="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571902417/mm_i7xhjj.jpg')!!}"
                        alt="" class="card-img-top">
                    <h5 class="card-title pt-3">Mathematics</h5>
                    <p class="card-text">14 Topics &nbsp; &nbsp;56 Sessions</p>
                </div>
            </a>
        </div>
    </div>
    {{-- Baris kedua kolom pelajaran --}}
    <div class="row">
        <div class="col-lg-3">
            <a href="#">
                <div class="card">
                    <img src="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571902417/mm_i7xhjj.jpg')!!}"
                        alt="" class="card-img-top">
                    <h5 class="card-title pt-3">Mathematics</h5>
                    <p class="card-text">14 Topics &nbsp; &nbsp;56 Sessions</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="#">
                <div class="card">
                    <img src="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571902417/mm_i7xhjj.jpg')!!}"
                        alt="" class="card-img-top">
                    <h5 class="card-title pt-3">Mathematics</h5>
                    <p class="card-text">14 Topics &nbsp; &nbsp;56 Sessions</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="#">
                <div class="card">
                    <img src="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571902417/mm_i7xhjj.jpg')!!}"
                        alt="" class="card-img-top">
                    <h5 class="card-title pt-3">Mathematics</h5>
                    <p class="card-text">14 Topics &nbsp; &nbsp;56 Sessions</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="#">
                <div class="card">
                    <img src="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571902417/mm_i7xhjj.jpg')!!}"
                        alt="" class="card-img-top">
                    <h5 class="card-title pt-3">Mathematics</h5>
                    <p class="card-text">14 Topics &nbsp; &nbsp;56 Sessions</p>
                </div>
            </a>
        </div>
    </div>
    @endsection