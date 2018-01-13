@extends('layouts.app')

@section('title')
    <title>Kostlief</title>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card col-lg-6 bg-dark">
               <div class="card-body">
                    <h1 align="center" style="color:white;">Welcome to Kostlief </h1>
                    <img class="card-img rounded mx-auto d-block" src="{{URL::TO('/logo/koslief.png')}}" alt="Not Found" style="width: 15rem;">
                    <h4 align="center" style="color:white">The ultimate Kost Finder</h4>
                    <p class="card-text" style="color : white;">
                        <h5 align="center" style="color:white;">Butuh kost kostan? Bisa dengan mudah dicari di sini!</h5>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection