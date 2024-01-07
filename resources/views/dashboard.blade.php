@extends('layout.be.template')

@section('title', 'Dashboard ')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}l">Dashboard</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body" style="font-size: 30px">
                <marquee behavior="" direction="">
                   SELAMAT DATANG ADMIN</marquee>
            </div>
        </div>
    </div>



@endsection
